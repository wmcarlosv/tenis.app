<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\Notice;
use App\NoticeCategory;
use App\Club;

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
        return view('home');
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

        return view('notice',['notice' => $notice, 'site' => $site, 'notices_header' => $notices_header, 'notice_categories' => $notice_categories,'related_notices' => $related_notices]);
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


        return view('notices',['site' => $site, 'notices_header' => $notices_header, 'notices' => $notices]);
    }

    public function championships(){

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

        return view('clubes',['site' => $site, 'notices_header' => $notices_header, 'clubes' => $clubes]);
    }
}
