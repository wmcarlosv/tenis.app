<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Championship;
use App\PlayerCategory;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('admin.games.home', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $championships = Championship::all();
        $chp = [];
        $chp[''] = "-";

        foreach($championships as $ch){
            $chp[$ch->id] = $ch->title;
        }

        $player_categories = PlayerCategory::all();
        $pyc = [];
        $pyc[''] = "-";

        foreach($player_categories as $pc){
            $pyc[$pc->id] = $pc->name;
        }

        return view('admin.games.add',['championships' => $chp, 'player_categories' => $pyc]);
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

        $game = Game::create($request->all());

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('games.index');
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
        $game = Game::findOrFail($id);
        return view('admin.games.edit', ['game' => $game]);
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
            'name' => 'required'
        ]);

        $game = Game::findOrFail($id);
        $game->name = $request->input('name');
        $game->save();

        flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        flash()->overlay('Registro Eliminado con Exito!!','Alerta!!');
        return redirect()->route('games.index');
    }
}
