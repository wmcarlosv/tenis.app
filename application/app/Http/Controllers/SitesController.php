<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Site;

class SitesController extends Controller
{
    public function index(){
        $site = Site::where('title','<>',null)->first();
        if(!$site){
            $site = [];
        }
    	return view('index', ['site' => $site]);
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

            if($request->hasFile('slider_1')){
                $site->slider_1 = $request->slider_1->store('public/sites');
            }else{
                $site->slider_1 = NULL;
            }

            if($request->hasFile('slider_2')){
                $site->slider_2 = $request->slider_2->store('public/sites');
            }else{
                $site->slider_2 = NULL;
            }

            if($request->hasFile('slider_3')){
                $site->slider_3 = $request->slider_3->store('public/sites');
            }else{
                $site->slider_3 = NULL;
            }

            $site->facebook = $request->input('facebook');
            $site->twitter = $request->input('twitter');
            $site->instagram = $request->input('instagram');
            $site->googleplus = $request->input('googleplus');

            $site->save();

        }else{

            if($request->hasFile('logo')){
                $logo = $request->logo->store('public/sites');
            }else{
                $logo = $site->logo;
            }

            if($request->hasFile('slider_1')){
                $slider_1 = $request->slider_1->store('public/sites');
            }else{
                $slider_1 = $site->slider_1;
            }

            if($request->hasFile('slider_2')){
                $slider_2 = $request->slider_2->store('public/sites');
            }else{
                $slider_2 = $site->slider_2;
            }

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
                'slider_1' => $slider_1,
                'slider_2' => $slider_2,
                'slider_3' => $slider_3,
                'facebook' => $request->input('facebook'),
                'twitter' => $request->input('twitter'),
                'instagram' => $request->input('instagram'),
                'googleplus' => $request->input('googleplus')
            ]);
        }

    	flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('sites.edit');
    }
}