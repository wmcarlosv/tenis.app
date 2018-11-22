<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Championship;

class ChampionshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $championships = Championship::all();
        return view('admin.championships.home', ['championships' => $championships]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.championships.add');
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
            'title' => 'required',
            'description' => 'required',
            'datefrom' => 'required',
            'dateto' => 'required',
            'point_to_winner_game' => 'required',
            'total_points' => 'required'
        ]);

        $championship = new Championship();
        $championship->title = $request->input('title');
        $championship->description = $request->input('description');
        if($request->hasFile('cover')){
            $championship->cover = $request->cover->store('public/championships/covers');
        }else{
            $championship->cover = NULL;
        }
        $championship->datefrom = date('Y-m-d',strtotime($request->input('datefrom')));
        $championship->dateto = date('Y-m-d',strtotime($request->input('dateto')));
        $championship->point_to_winner_game = $request->input('point_to_winner_game');
        $championship->total_points = $request->input('total_points');
        $championship->save();

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('championships.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $championship = Championship::findOrFail($id);
        Storage::delete($championship->cover);
        $championship->cover = NULL;
        $championship->update();

        print json_encode(['borrado' => 'si']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $championship = Championship::findOrFail($id);
        return view('admin.championships.edit', ['championship' => $championship]);
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
            'title' => 'required',
            'description' => 'required',
            'datefrom' => 'required',
            'dateto' => 'required',
            'point_to_winner_game' => 'required',
            'total_points' => 'required'
        ]);

        $championship = Championship::findOrFail($id);
        $championship->title = $request->input('title');
        $championship->description = $request->input('description');
        if($request->hasFile('cover')){
            $championship->cover = $request->cover->store('public/championships/covers');
        }
        $championship->datefrom = date('Y/m/d',strtotime($request->input('datefrom')));
        $championship->dateto = date('Y/m/d',strtotime($request->input('dateto')));
        $championship->point_to_winner_game = $request->input('point_to_winner_game');
        $championship->total_points = $request->input('total_points');
        $championship->update();

        flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('championships.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $championship = Championship::findOrFail($id);
        Storage::delete($championship->cover);
        $championship->delete();
        flash()->overlay('Registro Eliminado con Exito!!','Alerta!!');
        return redirect()->route('championships.index');
    }
}
