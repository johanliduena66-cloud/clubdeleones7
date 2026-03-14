<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

use DB;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades=Actividad::all();
        return view('actividades.index')->with('actividades', $actividades); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividad=new Actividad();
        $actividad->titulo=request('titulo');
        $actividad->descripcion=request('descripcion');
 
        $image = $request->file('imagen');
       // dd($image);

        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('imagesa'),$avatarName);
        $info = pathinfo(storage_path().$avatarName);
        $ext = $info['extension'];

        $actividad->imagen = $avatarName;

        $actividad->save();
        return Redirect('/actividades');
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
        $actividad=Actividad::findorFail($id);
        return view('actividades.edit')->with('actividad', $actividad); 
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
        $actividad=Actividad::findorFail($id);
        $actividad->titulo = $request->get('titulo');
        $actividad->descripcion = $request->get('descripcion');
        if ($request->hasFile('imagen')){
            $file= $request->imagen;
            $file->move(public_path() . '/imagesa', $file->getClientOriginalName());
            $actividad->imagen = $file->getClientOriginalName();
        }
        $actividad->update();

        return redirect('/actividades'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad = Actividad::find($id);
        $actividad->delete();
        return Redirect('/actividades'); 
    }
}
