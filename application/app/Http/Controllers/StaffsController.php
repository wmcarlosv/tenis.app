<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Club;
use Auth;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();

        if(Auth::user()->role == 'club_manager'){
            $staffs = Staff::where('club_id','=',Auth::user()->club_id)->get();
            if(!$staffs){
                $staffs = [];
            }
        }

        return view('admin.staffs.home', ['staffs' => $staffs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubes = Club::all();

        $club_array = [];

        $club_array[''] = "-";
        foreach($clubes as $club){
            $club_array[$club->id] = $club->name;
        }

        return view('admin.staffs.add',['clubes' => $club_array]);
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
            'charge' => 'required',
            'club_id' => 'required',
            'show_order' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $staff = Staff::create($request->all());

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('staffs.index');
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
        $staff = Staff::findOrFail($id);
        $clubes = Club::all();

        $club_array = [];

        $club_array[''] = "-";
        foreach($clubes as $club){
            $club_array[$club->id] = $club->name;
        }

        return view('admin.staffs.edit', ['staff' => $staff, 'clubes' => $club_array]);
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
            'charge' => 'required',
            'club_id' => 'required',
            'show_order' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $staff = Staff::findOrFail($id);
        $staff->charge = $request->input('charge');
        $staff->club_id = $request->input('club_id');
        $staff->show_order = $request->input('show_order');
        $staff->name = $request->input('name');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        $staff->update();

        flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('staffs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();
        flash()->overlay('Registro Eliminado con Exito!!','Alerta!!');
        return redirect()->route('staffs.index');
    }
}