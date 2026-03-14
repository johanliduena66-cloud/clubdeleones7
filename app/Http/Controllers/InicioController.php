<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presidente;
use App\Models\Galeriah;
use App\Models\Galeria;
use App\Models\Actividad;
use App\Models\Video;

use DB;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function principal()
    {
        $actividades=Actividad::all();
        return view('welcome')->with('actividades', $actividades);
    }

    public function index()
    {
        return view('index');
    }

    public function mision()
    {
        return view('mision');
    }

    public function vision()
    {
        return view('vision');
    }
    public function proposito()
    {
        return view('proposito');
    }
    public function historiaporro()
    {
        return view('historiaporro');
    }

    public function historiaclub()
    {
        return view('historiaclub');
    }


    public function proyectofestival()
    {
        $galerias=Galeria::all();
        $galeriash=Galeriah::all();
        $videos=Video::all();
        return view('proyectofestival', compact('galerias','galeriash','videos'));               

    }
    

    public function gestionadministrativa()
    {
        $presidentes=Presidente::all();
        return view('gestionadministrativa')->with('presidentes', $presidentes);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
