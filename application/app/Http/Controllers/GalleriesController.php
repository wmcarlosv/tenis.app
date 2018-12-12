<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Gallery;
use Auth;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'club_manager'){

            $galleries = Gallery::where('club_id','=',Auth::user()->club_id)->get();
            if(!$galleries){
                $galleries = [];
            }
            
        }else{
            $galleries = Gallery::all();
        }
        
        return view('admin.galleries.home', ['galleries' => $galleries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.add');
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
            'description' => 'required'
        ]);

        $gallery = new Gallery();
        $gallery->title = $request->input('title');
        $gallery->description = $request->input('description');
        if($request->hasFile('photo')){
            $gallery->photo = $request->photo->store('public/galleries/photos');
        }else{
            $gallery->photo = NULL;
        }
        $gallery->save();

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('galleries.index');
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
        $gallery = Gallery::findOrFail($id);
        return view('admin.galleries.edit', ['gallery' => $gallery]);
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
            'description' => 'required'
        ]);

        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->input('title');
        $gallery->description = $request->input('description');
        if($request->hasFile('photo')){

            Storage::delete($gallery->photo);
            
            $gallery->photo = $request->photo->store('public/galleries/photos');
        }
        $gallery->update();

        flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('galleries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        Storage::delete($gallery->photo);

        $gallery->delete();

        flash()->overlay('Registro Eliminado con Exito!!','Alerta!!');

        return redirect()->route('galleries.index');
    }
}
