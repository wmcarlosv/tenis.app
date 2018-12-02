<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\Notice;
use App\NoticeCategory;
use App\Club;
use App\Championship;
use Auth;
use App\User;
use App\Region;
use App\PlayerCategory;
use App\Payment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::where('user_id','=',Auth::user()->id)->get();
        if(!$payments){
            $payments = [];
        }
        return view('home',['user_payments' => $payments]);
    }

    public function notice($slug = NULL){

        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $notice = Notice::where('slug','=',$slug)->first();
        if(!$notice){
            $notice = [];
        }

        $notice_categories = NoticeCategory::all();

        $related_notices = Notice::where('notice_category_id','=',$notice->notice_category_id)->get();

        if(!$related_notices){
            $related_notices = [];
        }

        $clubes = Club::where('id','<>',1)->orderby('created_at','DESC')->get();
        if(!$clubes){
            $clubes = [];
        }

        $regions = Region::where('id','<>',1)->get();

        $player_categories = PlayerCategory::all();

        return view('notice',['notice' => $notice, 'site' => $site, 'notices_header' => $notices_header, 'notice_categories' => $notice_categories,'related_notices' => $related_notices, 'regions' => $regions, 'clubes' => $clubes, 'player_categories' => $player_categories]);
    }

    public function notices(){

        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $notices = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->get();

        if(!$notices){
            $notices = [];
        }

        $clubes = Club::where('id','<>',1)->orderby('created_at','DESC')->get();
        if(!$clubes){
            $clubes = [];
        }

        $regions = Region::where('id','<>',1)->get();

        $player_categories = PlayerCategory::all();

        return view('notices',['site' => $site, 'notices_header' => $notices_header, 'notices' => $notices,'regions' => $regions, 'clubes' => $clubes, 'player_categories' => $player_categories]);
    }

    public function championships(){

        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $championships = Championship::orderby('created_at','DESC')->get();
        if(!$championships){
            $championships = [];
        }

        $clubes = Club::where('id','<>',1)->orderby('created_at','DESC')->get();
        if(!$clubes){
            $clubes = [];
        }

        $regions = Region::where('id','<>',1)->get();

        $player_categories = PlayerCategory::all();

        return view('championships',['site' => $site, 'notices_header' => $notices_header, 'championships' => $championships,'regions' => $regions, 'clubes' => $clubes, 'player_categories' => $player_categories]);
    }

    public function championship($id = NULL){
        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $championship = Championship::findOrFail($id);

        $clubes = Club::where('id','<>',1)->orderby('created_at','DESC')->get();
        if(!$clubes){
            $clubes = [];
        }

        $regions = Region::where('id','<>',1)->get();

        $player_categories = PlayerCategory::all();

        return view('championship',['site' => $site, 'notices_header' => $notices_header, 'championship' => $championship, 'regions' => $regions, 'clubes' => $clubes, 'player_categories' => $player_categories]);
    }

    public function clubes(){
        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $clubes = Club::where('id','<>',1)->orderBy('created_at','desc')->get();

        if(!$clubes){
            $clubes = [];
        }

        $regions = Region::where('id','<>',1)->get();

        $player_categories = PlayerCategory::all();

        return view('clubes',['site' => $site, 'notices_header' => $notices_header, 'clubes' => $clubes, 'regions' => $regions, 'player_categories' => $player_categories]);
    }

    public function custom_register(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'city_id' => 'required',
            'club_id' => 'required',
            'player_category_id' => 'required' 
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->city_id = $request->input('city_id');
        $user->club_id = $request->input('club_id');
        $user->player_category_id = $request->input('player_category_id');
        $user->role = "player";
        $user->save();

        Auth::login($user);

        return redirect("/home");
    }

    public function custom_login(Request $request){

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El email o contraseña son Invalidos!!'
            ]);
        }
        
        return redirect("/home");        
    }
}