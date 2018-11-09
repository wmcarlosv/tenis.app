<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use App\NoticeCategory;
use App\Tag;
use Auth;
use Illuminate\Support\Facades\Storage;

class NoticesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::where('id','<>', 1)->get();
        return view('admin.notices.home', ['notices' => $notices]);
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

        $tags = Tag::all();
        $array_tag = [];
        foreach ($tags as $tag) {
            $array_tag[$tag->id] = $tag->name;
        }
        return view('admin.notices.add',['notice_categories' => $array, 'tags' => $array_tag]);
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
            'notice_category_id' => 'required'
        ]);

        $notice = new Notice();
        $notice->title = $request->input('title');
        $notice->slug = strtolower(str_replace(" ","-", $notice->title));
        $notice->notice_category_id = $request->input('notice_category_id');
        if($request->hasFile('avatar')){
            $notice->avatar = explode("/", $request->avatar->store('public/notices/avatars'))[3];
        }else{
            $notice->avatar = NULL;
        }
        $notice->status = $request->input('status');
        $notice->user_id = Auth::user()->id;
        $notice->content = $request->input('content');
        $notice->save();

        $notice_tags = [];
        $cont = 0;
        foreach ($request->input('tags') as $tag) {
            $notice_tags[$cont]['notice_id'] = $notice->id;
            $notice_tags[$cont]['tag_id'] = $tag;
            $cont++;
        }

        $notice->tags()->attach($notice_tags);

        flash()->overlay('Registro Insertado con Exito!!', 'Alerta!!');

        return redirect()->route('notices.index');
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
        $notice = Notice::findOrFail($id);
        $notice_categories = NoticeCategory::all();
        $array = [];
        $array[''] = '-';
        foreach ($notice_categories as $category) {
            $array[$category->id] = $category->name;
        }

        $tags = Tag::all();
        $array_tag = [];
        foreach ($tags as $tag) {
            $array_tag[$tag->id] = $tag->name;
        }

        $selected_tags = [];
        $cont = 0;
        foreach ($notice->tags as $ntag) {
            $selected_tags[$cont] = $ntag->pivot->tag_id;
            $cont++;
        }
          
        return view('admin.notices.edit', ['notice' => $notice, 'notice_categories' => $array, 'tags' => $array_tag, 'selected_tags' => $selected_tags]);
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
            'notice_category_id' => 'required'
        ]);

        $notice = Notice::findOrFail($id);
        $notice->title = $request->input('title');
        $notice->slug = strtolower(str_replace(" ","-", $notice->title));
        $notice->notice_category_id = $request->input('notice_category_id');

        if($request->hasFile('avatar')){
            $notice->avatar = explode("/", $request->avatar->store('public/notices/avatars'))[3];
        }

        $notice->status = $request->input('status');
        $notice->user_id = Auth::user()->id;
        $notice->content = $request->input('content');
        $notice->update();

        $notice->tags()->detach();

        $notice_tags = [];
        $cont = 0;
        foreach ($request->input('tags') as $tag) {
            $notice_tags[$cont]['notice_id'] = $notice->id;
            $notice_tags[$cont]['tag_id'] = $tag;
            $cont++;
        }

        $notice->tags()->attach($notice_tags);

        flash()->overlay('Registro Actualizado con Exito!!', 'Alerta!!');

        return redirect()->route('notices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();
        flash()->overlay('Registro Eliminado con Exito!!','Alerta!!');
        return redirect()->route('notices.index');
    }

    public function delete_avatar($id = NULL){
        $notice = Notice::findOrFail($id);
        Storage::delete('public/notices/avatars/'.$notice->avatar);
        $notice->avatar = NULL;
        $notice->save();

        print json_encode(['borrado' => 'si']);
    }
}
