<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;

use DB;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerias=Galeria::all();
        return view('galerias.index')->with('galerias', $galerias);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galerias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $galeria=new Galeria();
        $galeria->nombre=request('nombre');
        $galeria->ano=request('ano');
 
        $image = $request->file('imagen');
       // dd($image);

        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('imagesg'),$avatarName);
        $info = pathinfo(storage_path().$avatarName);
        $ext = $info['extension'];

        $galeria->imagen = $avatarName;

        $galeria->save();
        return Redirect('/galerias');
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
        $galeria=Galeria::find($id);
        return view('galerias.edit')->with('galeria', $galeria); 
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
        $galeria=Galeria::findorFail($id);
        $galeria->nombre = $request->get('nombre');
        $galeria->ano = $request->get('ano');
        if ($request->hasFile('imagen')){
            $file= $request->imagen;
            $file->move(public_path() . '/imagesg', $file->getClientOriginalName());
            $galeria->imagen = $file->getClientOriginalName();
        }
        $galeria->update();

        return redirect('/galerias'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeria = Galeria::find($id);
        $galeria->delete();
        return Redirect('/galerias');  
    }
}
