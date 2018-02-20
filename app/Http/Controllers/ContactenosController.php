<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class ContactenosController extends Controller
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
        $contactenos = Contacto::orderBy('id','DESC')->paginate(10);
        return view('admin.contactenos.index')->with('contactenos',$contactenos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.contactenos.create');
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
        $contacto = new Contacto();

        $contacto->tipo = $request->tipo;
        $contacto->contenidoTipo = $request->contenidoTipo;
        $contacto->icono = $request->icono;
        $contacto->estado = $request->estado;

        $contacto->save();
        flash()->overlay('Contacto '.$contacto->tipo.' ha sido registrado', 'Contacto registrado');
        return redirect()->route('admin.contactenos.index');
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
        $contacto = Contacto::find($id);

        return view('admin.contactenos.edit')->with('contacto',$contacto);
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
        $contacto = Contacto::find($id);

        $contacto->tipo = $request->tipo;
        $contacto->contenidoTipo = $request->contenidoTipo;
        $contacto->icono = $request->icono;
        $contacto->estado = $request->estado;

        $contacto->save();
        flash()->overlay('Contacto '.$contacto->tipo.' ha sido actualizado', 'Contacto actualizado');
        return redirect()->route('admin.contactenos.index');
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
        $contacto = Contacto::find($id);
        $contacto->delete();
        flash()->overlay('Contacto '.$contacto->tipo.' ha sido eliminado', 'Contacto eliminado');
        return redirect()->route('admin.contactenos.index');
    }
}
