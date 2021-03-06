<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Site;
use App\Notice;
use App\Championship;
use App\Club;
use App\Region;
use App\PlayerCategory;
use App\Gallery;
use App\Ranking;

class SitesController extends Controller
{
    public function index(){

        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(5)->get();

        if(!$notices){
            $notices = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $championships = Championship::orderby('datefrom','ASC')->limit(4)->get();

        if(!$championships){
            $championships = [];
        }

        $clubes = Club::orderby('created_at','DESC')->get();
        if(!$clubes){
            $clubes = [];
        }

        $regions = Region::all();

        $player_categories = PlayerCategory::all();

        $photos = Gallery::orderBy("created_at","DESC")->get();
        if(!$photos){
            $photos = [];
        }

        $last_championship = Championship::orderby('datefrom','DESC')->first();
        $show_ranking = false;
        if( strtotime($last_championship->dateto) > strtotime(date('Y-m-d')) ){
            $show_ranking = true;
        }

        $players_and_categories = [];

        foreach($player_categories as $index => $pc){
            $players_and_categories[$pc->id] = $this->list_rankings_home($pc->id);
        }

    	return view('index', ['site' => $site, 'notices' => $notices, 'notices_header' => $notices_header,'championships' => $championships,'clubes' => $clubes, 'regions' => $regions, 'player_categories' => $player_categories, 'photos' => $photos, 'show_ranking' => $show_ranking, 'players_and_categories' => $players_and_categories]);
    }

    public function edit(){

    	$site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = new Site();
        }

    	return view('admin.sites.edit',['site' => $site]);
    }

    public function update(Request $request){

    	$site = Site::where('title','<>',NULL)->first();

        if(!$site){

            $site = new Site();
            $site->title = $request->input('title');
            $site->description = $request->input('description');
            $site->tags = $request->input('tags');

            if($request->hasFile('logo')){
                $site->logo = $request->logo->store('public/sites');
            }else{
                $site->logo = NULL;
            }

            $site->slider_1_title = $request->input('slider_1_title');
            $site->slider_1_subtitle = $request->input('slider_1_subtitle');
            $site->slider_1_link = $request->input('slider_1_link');
            if($request->hasFile('slider_1')){
                $site->slider_1 = $request->slider_1->store('public/sites');
            }else{
                $site->slider_1 = NULL;
            }

            $site->slider_2_title = $request->input('slider_2_title');
            $site->slider_2_subtitle = $request->input('slider_2_subtitle');
            $site->slider_2_link = $request->input('slider_2_link');
            if($request->hasFile('slider_2')){
                $site->slider_2 = $request->slider_2->store('public/sites');
            }else{
                $site->slider_2 = NULL;
            }

            $site->slider_3_title = $request->input('slider_3_title');
            $site->slider_3_subtitle = $request->input('slider_3_subtitle');
            $site->slider_3_link = $request->input('slider_3_link');
            if($request->hasFile('slider_3')){
                $site->slider_3 = $request->slider_3->store('public/sites');
            }else{
                $site->slider_3 = NULL;
            }

            $site->facebook = $request->input('facebook');
            $site->twitter = $request->input('twitter');
            $site->linkedin = $request->input('linkedin');
            $site->vimeo = $request->input('vimeo');
            $site->googleplus = $request->input('googleplus');

            $site->save();

        }else{

            if($request->hasFile('logo')){
                $logo = $request->logo->store('public/sites');
            }else{
                $logo = $site->logo;
            }

            $slider_1_title = $request->input('slider_1_title');
            $slider_1_subtitle = $request->input('slider_1_subtitle');
            $slider_1_link = $request->input('slider_1_link');
            if($request->hasFile('slider_1')){
                $slider_1 = $request->slider_1->store('public/sites');
            }else{
                $slider_1 = $site->slider_1;
            }

            $slider_2_title = $request->input('slider_2_title');
            $slider_2_subtitle = $request->input('slider_2_subtitle');
            $slider_2_link = $request->input('slider_2_link');
            if($request->hasFile('slider_2')){
                $slider_2 = $request->slider_2->store('public/sites');
            }else{
                $slider_2 = $site->slider_2;
            }
            $slider_3_title = $request->input('slider_3_title');
            $slider_3_subtitle = $request->input('slider_3_subtitle');
            $slider_3_link = $request->input('slider_3_link');
            if($request->hasFile('slider_3')){
                $slider_3 = $request->slider_3->store('public/sites');
            }else{
                $slider_3 = $site->slider_3;
            }

            DB::table('sites')
            ->where('title','<>', NULL)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'tags' => $request->input('tags'),
                'logo' => $logo,
                'slider_1_title' => $slider_1_title,
                'slider_1_subtitle' => $slider_1_subtitle,
                'slider_1' => $slider_1,
                'slider_1_link' => $slider_1_link,
                'slider_2_title' => $slider_2_title,
                'slider_2_subtitle' => $slider_2_subtitle,
                'slider_2' => $slider_2,
                'slider_2_link' => $slider_2_link,
                'slider_3_title' => $slider_3_title,
                'slider_3_subtitle' => $slider_3_subtitle,
                'slider_3' => $slider_3,
                'slider_3_link' => $slider_3_link,
                'facebook' => $request->input('facebook'),
                'twitter' => $request->input('twitter'),
                'linkedin' => $request->input('linkedin'),
                'vimeo' => $request->input('vimeo'),
                'googleplus' => $request->input('googleplus')
            ]);
        }

    	flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('sites.edit');
    }

    public function drop_image($image = NULL){

        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        Storage::delete($site->$image);

        DB::table('sites')
            ->where('title','<>', NULL)
            ->update([
               $image => NULL
             ]);

        $site->save();

        print json_encode(['borrado' => 'si']);
    }

    public function list_rankings($player_category_id = NULL){
        $rankings = [];
        if($player_category_id != NULL){
            $last_championship = Championship::orderby('datefrom','DESC')->first();
            $rankings = Ranking::where([
                ['championship_id','=',$last_championship->id],
                ['player_category_id','=',$player_category_id]
            ])->orderBy("points","DESC")->get();

            if(count($rankings) <= 0){
                $rankings = [];
            }
        }

        return $rankings;
    }

    public function list_rankings_home($player_category_id = NULL){
        $rankings = [];
        if($player_category_id != NULL){
            $last_championship = Championship::orderby('datefrom','DESC')->first();
            $rankings = Ranking::where([
                ['championship_id','=',$last_championship->id],
                ['player_category_id','=',$player_category_id]
            ])->orderBy("points","DESC")->limit(10)->get();

            if(count($rankings) <= 0){
                $rankings = [];
            }
        }

        return $rankings;
    }

    public function ranking(){
        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }

        $notices = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(5)->get();

        if(!$notices){
            $notices = [];
        }

        $notices_header = Notice::where('status','=','publisher')->orderBy('publisher_date','desc')->limit(3)->get();

        if(!$notices_header){
            $notices_header = [];
        }

        $championships = Championship::orderby('datefrom','ASC')->limit(4)->get();

        if(!$championships){
            $championships = [];
        }

        $clubes = Club::orderby('created_at','DESC')->get();
        if(!$clubes){
            $clubes = [];
        }

        $regions = Region::all();

        $player_categories = PlayerCategory::all();

        $photos = Gallery::orderBy("created_at","DESC")->get();
        if(!$photos){
            $photos = [];
        }

        $last_championship = Championship::orderby('datefrom','DESC')->first();
        $show_ranking = false;
        if( strtotime($last_championship->dateto) > strtotime(date('Y-m-d')) ){
            $show_ranking = true;
        }

        $players_and_categories = [];

        foreach($player_categories as $index => $pc){
            $players_and_categories[$pc->id] = $this->list_rankings($pc->id);
        }

        return view('ranking', ['site' => $site, 'notices' => $notices, 'notices_header' => $notices_header,'championships' => $championships,'clubes' => $clubes, 'regions' => $regions, 'player_categories' => $player_categories, 'photos' => $photos, 'show_ranking' => $show_ranking, 'players_and_categories' => $players_and_categories]);
    }
}