<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeriah;

use DB;

class GaleriahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeriash=Galeriah::all();
        return view('galeriash.index')->with('galeriash', $galeriash);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeriash.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $galeriah=new Galeriah();
        $galeriah->nombre=request('nombre');
        $galeriah->ano=request('ano');
 
        $image = $request->file('imagen');
       // dd($image);

        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('imagesh'),$avatarName);
        $info = pathinfo(storage_path().$avatarName);
        $ext = $info['extension'];

        $galeriah->imagen = $avatarName;

        $galeriah->save();
        return Redirect('/galeriash');
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
        $galeriah=Galeriah::find($id);
        return view('galeriash.edit')->with('galeriah', $galeriah); 
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
        $galeriah=Galeriah::findorFail($id);
        $galeriah->nombre = $request->get('nombre');
        $galeriah->ano = $request->get('ano');
        if ($request->hasFile('imagen')){
            $file= $request->imagen;
            $file->move(public_path() . '/imagesh', $file->getClientOriginalName());
            $galeriah->imagen = $file->getClientOriginalName();
        }
        $galeriah->update();

        return redirect('/galeriash'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeriah = Galeriah::find($id);
        $galeriah->delete();
        return Redirect('/galeriash');  
    }
}
