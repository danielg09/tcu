<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RedSocial;

class RedesSocialesController extends Controller
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
        $redesSociales = RedSocial::orderBy('id','DESC')->paginate(10);
        return view('admin.redessociales.index')->with('redesSociales',$redesSociales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.redessociales.create');
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
        $redSocial = new RedSocial();

        $redSocial->red = $request->red;
        $redSocial->url = $request->url;
        $redSocial->icono = $request->icono;
        $redSocial->estado = $request->estado;

        $redSocial->save();
        flash()->overlay('Red Social '.$redSocial->tipo.' ha sido registrado', 'Red Social registrado');
        return redirect()->route('admin.redessociales.index');
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
        $redSocial = RedSocial::find($id);

        return view('admin.redessociales.edit')->with('redSocial',$redSocial);
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
        $redSocial = RedSocial::find($id);

        $redSocial->red = $request->red;
        $redSocial->url = $request->url;
        $redSocial->icono = $request->icono;
        $redSocial->estado = $request->estado;

        $redSocial->save();
        flash()->overlay('Red Social '.$redSocial->tipo.' ha sido actualizada', 'Red Social actualizada');
        return redirect()->route('admin.redessociales.index');
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
        $redSocial = RedSocial::find($id);
        $redSocial->delete();
        flash()->overlay('Red Social '.$redSocial->tipo.' ha sido eiminado', 'Red Social eiminado');
        return redirect()->route('admin.redessociales.index');
    }
}
