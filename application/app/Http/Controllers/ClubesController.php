<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\Region;
use App\City;

class ClubesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubes = Club::all();
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
            'region_id' => 'required'
        ]);

        $club = Club::create($request->all());

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

        return view('admin.clubes.edit', ['club' => $club, 'regions' => $region_array]);
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
            'region_id' => 'required'
        ]);

        $club = Club::findOrFail($id);
        $club->name = $request->input('name');
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
}
