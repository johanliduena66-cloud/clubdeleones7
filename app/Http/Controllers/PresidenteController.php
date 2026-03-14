<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presidente;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserEditFormRequest;

use Illuminate\Support\Facades\Hash;

use DB;

class PresidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presidentes=Presidente::all();
        return view('presidentes.index')->with('presidentes', $presidentes);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('presidentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $presidente=new Presidente();
        $presidente->nombre=request('nombre');
        $presidente->ano=request('ano');
 
        $image = $request->file('imagen');
       // dd($image);

        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('imagesp'),$avatarName);
        $info = pathinfo(storage_path().$avatarName);
        $ext = $info['extension'];

        $presidente->imagen = $avatarName;

        $presidente->save();
        return Redirect('/presidentes');
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
        $presidente=Presidente::find($id);
        return view('presidentes.edit')->with('presidente', $presidente); 
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
        $presidente=Presidente::findorFail($id);
        $presidente->nombre = $request->get('nombre');
        $presidente->ano = $request->get('ano');
        if ($request->hasFile('imagen')){
            $file= $request->imagen;
            $file->move(public_path() . '/imagesp', $file->getClientOriginalName());
            $presidente->imagen = $file->getClientOriginalName();
        }
        $presidente->update();

        return redirect('/presidentes'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presidente = Presidente::find($id);
        $presidente->delete();
        return Redirect('/presidentes');  
    }
}
