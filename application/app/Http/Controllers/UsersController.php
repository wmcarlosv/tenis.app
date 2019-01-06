<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Region;
use App\City;
use App\Club;
use App\PlayerCategory;
use Auth;
use App\Championship;
use App\Payment;
use App\Product;
use App\ChampionshipPlayer;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.home',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $regions = Region::all();
        $clubes = Club::all();
        $player_categories = PlayerCategory::all();

        return view('admin.users.add',['regions' => $regions, 'clubes' => $clubes,'player_categories' => $player_categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'region_id' => 'required',
            'city_id' => 'required',
            'club_id' => 'required',
            'player_category_id' => 'required',
            'password' => 'required'
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->city_id = $request->input('city_id');
        $user->club_id = $request->input('club_id');
        $user->player_category_id = $request->input('player_category_id');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::findorfail($id);
        $championships = Championship::all();
        return view('admin.users.view',['user' => $user, 'championships' => $championships]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'region_id' => 'required',
            'city_id' => 'required',
            'club_id' => 'required',
            'player_category_id' => 'required'
        ]);

        $user = User::findorfail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        $user->birthdate = date('Y-m-d',strtotime($request->input('birthdate')));
        $user->about = $request->input('about');
        $user->weight = $request->input('weight');
        $user->height = $request->input('height');
        $user->skillful_hand = $request->input('skillful_hand');
        $user->facebook = $request->input('facebook');
        $user->twitter = $request->input('twitter');
        $user->googleplus = $request->input('googleplus');
        $user->instagram = $request->input('instagram');
        $user->youtube = $request->input('youtube');

        $user->city_id = $request->input('city_id');
        $user->address = $request->input('address');
        $user->club_id = $request->input('club_id');
        $user->player_category_id = $request->input('player_category_id');

        if($request->hasFile('avatar')){
            $user->avatar = $request->avatar->store('public/users/avatars');
        }

        flash()->overlay('Perfil actualzado con Exito!!', 'Alerta!!');

        $user->update();

        $from_page = $request->input('from_page');
        if($from_page == "user_profile"){
            return redirect()->route('home');
        }else{
            return redirect()->route('users.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    public function user_profile($id = NULL){

        $regions = Region::all();
        $regions_array = [];
        $regions_array[''] = '-';
        foreach($regions as $region){
            $regions_array[$region->id] = $region->name;
        }

        $cities = City::where('region_id','=',Auth::user()->city->region_id)->get();
        $cities_array = [];
        $cities_array[''] = '-';

        foreach($cities as $city){
            $cities_array[$city->id] = $city->name;
        }

        $clubes = Club::all();
        $clubes_array = [];
        $clubes_array[''] = '-';
        foreach($clubes as $club){
            $clubes_array[$club->id] = $club->name;
        }

        $player_categories = PlayerCategory::all();
        $pc_array = [];
        $pc_array[''] = '-';
        foreach($player_categories as $pc){
            $pc_array[$pc->id] = $pc->name;
        }

        return view('admin.users.profile',['regions' => $regions_array, 'cities' => $cities_array, 'clubes' => $clubes_array, 'player_categories' => $pc_array]);
    }

    public function change_password($id = NULL, Request $request){

        $request->validate([
                'password' => 'required|min:8|max:16|confirmed',
                'password_confirmation' => 'required'
        ]);

        $user = User::findorfail($id);

        $user->password = bcrypt($request->input('password'));

        $user->update();

        flash()->overlay('Contraseña Actualizada con Exito!!', 'Alerta!!');

        return redirect()->route('home');
    }

    public function delete_profile_image($id){
        $user = User::findorfail($id);
        Storage::delete($user->avatar);
        $user->avatar = NULL;
        $user->update();

        print json_encode(['borrado' => 'yes']);
    }

    public function player_to_site($user_id = NULL){

        $product = Product::where('id','=',1)->first();

        $ver_pay = Payment::where([
            ['user_id','=',$user_id],
            ['product_id','=',1]
        ])->first();

        if(!$ver_pay){
            $payment = new Payment();
            $payment->product_id = 1;
            $payment->user_id = $user_id;
            $payment->payment_method_id = 1;
            $payment->amount = $product->price;
            $payment->payment_date = date('Y-m-d H:m:s');
            $payment->status = 2;
            $payment->attachment = 'public/payments/attachments/empty.jpg';
            $payment->reference_number = '00000000';
            $payment->save();

            print json_encode(['registro' => 'yes']);
        }else{
            print json_encode(['registro' => 'existe']); 
        }   
    }

    public function player_to_chmp($user_id = NULL, $championship_id = NULL, $player_category_id = NULL){

        $product = Product::where('id','=',2)->first();

        $ver_champ = ChampionshipPlayer::where([
            ['user_id','=',$user_id],
            ['championship_id','=',$championship_id]
        ])->first();

        if(!$ver_champ){
            $payment = new Payment();
            $payment->product_id = 2;
            $payment->user_id = $user_id;
            $payment->payment_method_id = 1;
            $payment->amount = $product->price;
            $payment->payment_date = date('Y-m-d H:m:s');
            $payment->status = 2;
            $payment->attachment = 'public/payments/attachments/empty.jpg';
            $payment->reference_number = '00000000';
            $payment->save();

            $chm_ply = new ChampionshipPlayer();
            $chm_ply->championship_id = $championship_id;
            $chm_ply->user_id = $user_id;
            $chm_ply->payment_id = $payment->id;
            $chm_ply->player_category_id = $player_category_id;
            $chm_ply->save();

            print json_encode(['registro' => 'yes']);

        }else{
           print json_encode(['registro' => 'existe']); 
        }
    }
}
