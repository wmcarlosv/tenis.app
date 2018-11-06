<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Region;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::where('id','<>', 1)->get();
        return view('admin.cities.home', ['cities' => $cities]);
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

        return view('admin.cities.add', ['regions' => $region_array]);
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

        $city = City::create($request->all());

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('cities.index');
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
        $city = City::findOrFail($id);
        $regions = Region::where('id','<>', 1)->get();
        $region_array = [];
        $region_array[''] = '-';

        foreach ($regions as $region) {
            $region_array[$region->id] = $region->name;
        }

        return view('admin.cities.edit', ['city' => $city, 'regions' => $region_array]);
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

        $city = City::findOrFail($id);
        $city->name = $request->input('name');
        $city->save();

        flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('cities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        flash()->overlay('Registro Eliminado con Exito!!','Alerta!!');
        return redirect()->route('cities.index');
    }
}
