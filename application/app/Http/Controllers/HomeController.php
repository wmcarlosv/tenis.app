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
use App\ChampionshipPlayer;
use App\Staff;
use App\Gallery;

class HomeController extends Controller
{

    private $user_id = NULL;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');

           

    }

    public function init(){
        if(isset(Auth::user()->id) and !empty(Auth::user()->id)){
            $this->user_id = Auth::user()->id;
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->init();

        $payment_subscription = Payment::where([
            ['user_id','=',$this->user_id],
            ['id','=', 1]
        ])->orderby('payment_date','DESC')->limit(1)->first();

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(5)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $championships = Championship::orderby('created_at','DESC')->limit(5)->get();
        if(!$championships){
            $championships = [];
        }

        return view('home',['payment_subscription' => $payment_subscription, 'notices' => $notices_header, 'championships' => $championships]);
    }

    public function notice($slug = NULL){
        $this->init();
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
        $this->init();
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
        $this->init();
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

        $this->init();
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

        $cham_player = ChampionshipPlayer::where([
            ['user_id','=',$this->user_id],
            ['championship_id','=',$id]
        ])->orderby('created_at','DESC')->limit(1)->first();  
        
        $players = ChampionshipPlayer::where([
            ['championship_id','=',$id]
        ])->orderby('created_at','DESC')->get();

        if(!$players){
            $players = [];
        }

        $player_categories = PlayerCategory::all();

        $payment_subscription = Payment::where([
            ['user_id','=',$this->user_id],
            ['id','=',1]
        ])->orderby('payment_date','DESC')->limit(1)->first();

        return view('championship',['site' => $site, 'notices_header' => $notices_header, 'championship' => $championship, 'regions' => $regions, 'clubes' => $clubes, 'player_categories' => $player_categories, 'cham_player' => $cham_player, 'players' => $players, 'payment_subscription' => $payment_subscription]);
    }




    public function clubes(){
        $this->init();
        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $clubes = Club::orderBy('created_at','desc')->get();

        if(!$clubes){
            $clubes = [];
        }

        $regions = Region::all();

        $player_categories = PlayerCategory::all();

        return view('clubes',['site' => $site, 'notices_header' => $notices_header, 'clubes' => $clubes, 'regions' => $regions, 'player_categories' => $player_categories]);
    }

    public function galleries(){

        $this->init();
        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $galleries = Gallery::orderBy('created_at','desc')->get();

        if(!$galleries){
            $galleries = [];
        }

        $regions = Region::all();

        $player_categories = PlayerCategory::all();

        return view('galleries',['site' => $site, 'notices_header' => $notices_header, 'galleries' => $galleries, 'regions' => $regions, 'player_categories' => $player_categories]);
   
    }

    public function custom_register(Request $request){
        $this->init();
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
        $this->init();
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El email o contraseña son Invalidos!!'
            ]);
        }
        
        return redirect("/home");        
    }

    public function club($slug = NULL){

        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $club = Club::where('slug','=',$slug)->first();

        $staffs = Staff::where('club_id','=',$club->id)->orderby("show_order","ASC")->get();
        if(!$staffs){
            $staffs = [];
        }

        $galleries = Gallery::where('club_id','=',$club->id)->orderby("created_at","DESC")->limit(6)->get();
        if(!$galleries){
            $galleries = [];
        }

        $notices = Notice::where('club_id','=',$club->id)->orderby('publisher_date','DESC')->limit(5)->get();
        if(!$notices){
            $notices = [];
        }

        $clubes = Club::orderby('created_at','DESC')->get();
        if(!$clubes){
            $clubes = [];
        }

        $regions = Region::all();

        $player_categories = PlayerCategory::all();


        return view('club',['club' => $club, 
            'site' => $site, 'notices_header' => $notices_header, 'staffs' => $staffs, 'galleries' => $galleries, 'notices' => $notices, 'regions' => $regions, 'clubes' => $clubes, 'player_categories' => $player_categories]);
    }

    public function profile($id = NULL){

        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $user = User::where('id','=',$id)->first();

        $clubes = Club::orderby('created_at','DESC')->get();
        if(!$clubes){
            $clubes = [];
        }

        $regions = Region::all();

        $player_categories = PlayerCategory::all();


        return view('profile',['user' => $user, 
            'site' => $site, 'notices_header' => $notices_header, 'regions' => $regions, 'clubes' => $clubes, 'player_categories' => $player_categories]);
    }
}