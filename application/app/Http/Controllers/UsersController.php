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

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
}
