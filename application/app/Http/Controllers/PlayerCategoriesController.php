<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayerCategory;

class PlayerCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player_categories = PlayerCategory::all();

        return view('admin.player_categories.home', 
            ['player_categories' => $player_categories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.player_categories.add');
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
            'name' => 'required'
        ]);

        $player_category = new PlayerCategory();
        $player_category->name = $request->input('name');
        $player_category->slug = str_replace(" ", "-", $request->input('name'));
        $player_category->save();

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('player_categories.index');
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
        $player_category = PlayerCategory::findOrFail($id);
        return view('admin.player_categories.edit', ['player_category' => $player_category]);
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
        ]);

        $player_category = PlayerCategory::findOrFail($id);
        $player_category->name = $request->input('name');
        $player_category->slug = str_replace(" ", "-", $request->input('name'));
        $player_category->save();

        flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('player_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player_category = PlayerCategory::findOrFail($id);
        $player_category->delete();
        flash()->overlay('Registro Eliminado con Exito!!','Alerta!!');
        return redirect()->route('player_categories.index');
    }
}
