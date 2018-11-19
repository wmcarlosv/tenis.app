<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Site;

class SitesController extends Controller
{
    public function index(){

    	return view('index');
    }

    public function edit(){

    	$site = new Site();

    	return view('admin.sites.edit',['site' => $site]);
    }

    public function update(Request $request){

    	$site = new Site();

    	$site->title = $request->input('title');
    	$site->description = $request->input('description');
    	$site->tags = $request->input('tags');
    	if($request->hasFile('logo')){
    		$site->logo = $request->logo->store('public/sites');
    	}
    	if($request->hasFile('slider_1')){
    		$site->slider_1 = $request->logo->store('public/sites');
    	}
    	if($request->hasFile('slider_2')){
    		$site->slider_2 = $request->logo->store('public/sites');
    	}
    	if($request->hasFile('slider_3')){
    		$site->slider_3 = $request->logo->store('public/sites');
    	}
    	$site->facebook = $request->input('facebook');
    	$site->twitter = $request->input('twitter');
    	$site->instagram = $request->input('instragram');
    	$site->googleplus = $request->input('googleplus');

    	$site->update();

    	flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('sites.edit');
    }
}
