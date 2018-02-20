<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class ServiciosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $servicios = Servicio::orderBy('id','DESC')->paginate(10);
        return view('admin.servicios.index')->with('servicios',$servicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.servicios.create');
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
        $servicio = new Servicio();

        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->estado = $request->estado;

        $servicio->save();
        flash()->overlay('Servicio '.$servicio->tipo.' ha sido registrado', 'Servicio registrado');
        return redirect()->route('admin.servicios.index');
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
        $servicio = Servicio::find($id);

        return view('admin.servicios.edit')->with('servicio',$servicio);
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
        $servicio = Servicio::find($id);

        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->estado = $request->estado;

        $servicio->save();
        flash()->overlay('Servicio '.$servicio->nombre.' ha sido actualizado', 'Servicio actualizado');
        return redirect()->route('admin.servicios.index');
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
        $servicio = Servicio::find($id);
        $servicio->delete();
        flash()->overlay('Servicio '.$servicio->nombre.' ha sido eliminado', 'Servicio eliminado');
        return redirect()->route('admin.servicios.index');
    }
}
