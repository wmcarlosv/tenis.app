<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\Region;
use App\City;
use Illuminate\Support\Facades\Storage;

class ClubesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubes = Club::where('id','<>', 1)->get();
        return view('admin.clubes.home', ['clubes' => $clubes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::where('id','<>', 1)->get();
        $region_array = [];
        $region_array[''] = '-';

        foreach ($regions as $region) {
            $region_array[$region->id] = $region->name;
        }

        return view('admin.clubes.add', ['regions' => $region_array]);
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
            'region_id' => 'required',
            'city_id' => 'required',
            'address' => 'required'
        ]);

        $club = new Club();

        $club->name = $request->input('name');
        $club->city_id = $request->input('city_id');
        $club->address = $request->input('address');

        if($request->hasFile('logo')){
            $club->logo = explode('/',$request->logo->store('public/clubes/logos'))[3];
        }else{
            $club->logo = NULL;
        }
        if($request->hasFile('cover')){
            $club->cover = explode('/',$request->cover->store('public/clubes/covers'))[3];
        }else{
            $club->cover = NULL;
        }
        

        $club->slug = strtolower(str_replace(" ","-",$request->input('name')));
        $club->save();

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('clubes.index');
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
        $club = Club::findOrFail($id);
        $regions = Region::where('id','<>', 1)->get();
        $region_array = [];
        $region_array[''] = '-';

        foreach ($regions as $region) {
            $region_array[$region->id] = $region->name;
        }

        $cities = City::where('region_id','=',$club->city->region_id)->get();

        $city_array = [];
        $city_array[''] = '-';

        foreach ($cities as $city) {

            $city_array[$city->id] = $city->name;

        }

        return view('admin.clubes.edit', ['club' => $club, 'regions' => $region_array, 'cities' => $city_array]);
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
            'region_id' => 'required',
            'city_id' => 'required',
            'address' => 'required'
        ]);

        $club = Club::findOrFail($id);
        $club->name = $request->input('name');
        $club->city_id = $request->input('city_id');
        $club->address = $request->input('address');

        if($request->hasFile('logo')){
            $club->logo = explode('/',$request->logo->store('public/clubes/logos'))[3];
        }

        if($request->hasFile('cover')){
            $club->cover = explode('/',$request->cover->store('public/clubes/covers'))[3];
        }

        $club->save();

        flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('clubes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::findOrFail($id);
        $club->delete();
        flash()->overlay('Registro Eliminado con Exito!!','Alerta!!');
        return redirect()->route('clubes.index');
    }

    public function delete_logo($id = NULL){
        $club = Club::findOrFail($id);
        Storage::delete('public/clubes/logos/'.$club->logo);
        $club->logo = NULL;
        $club->save();

        print json_encode(['borrado' => 'si']);
    }

    public function delete_cover($id = NULL){
        $club = Club::findOrFail($id);
        Storage::delete('public/clubes/covers/'.$club->cover);
        $club->cover = NULL;
        $club->save();

        print json_encode(['borrado' => 'si']);
    }
}
