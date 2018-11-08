<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NoticeCategory;

class NoticeCategoriesController extends Controller
{    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice_categories = NoticeCategory::all();

        return view('admin.notice_categories.home', 
            ['notice_categories' => $notice_categories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notice_categories = NoticeCategory::all();
        $array = [];
        $array[''] = '-';
        foreach ($notice_categories as $category) {
            $array[$category->id] = $category->name;
        }

        return view('admin.notice_categories.add',['parent_categories' => $array]);
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

        $notice_category = new NoticeCategory();
        $notice_category->name = $request->input('name');
        $notice_category->slug = str_replace(" ", "-", $request->input('name'));
        $notice_category->parent_id = $request->input('parent_id');
        $notice_category->save();

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('notice_categories.index');
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
        $notice_category = NoticeCategory::findOrFail($id);

        $notice_categories = NoticeCategory::all();
        $array = [];
        $array[''] = '-';
        
        foreach ($notice_categories as $category) {
            $array[$category->id] = $category->name;
        }

        return view('admin.notice_categories.edit', [
            'notice_category' => $notice_category,
            'parent_categories' => $array
        ]);
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

        $notice_category = NoticeCategory::findOrFail($id);
        $notice_category->name = $request->input('name');
        $notice_category->slug = str_replace(" ", "-", $request->input('name'));
        $notice_category->save();

        flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('notice_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice_category = NoticeCategory::findOrFail($id);
        $notice_category->delete();
        flash()->overlay('Registro Eliminado con Exito!!','Alerta!!');
        return redirect()->route('notice_categories.index');
    }
}
