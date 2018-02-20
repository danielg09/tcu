<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
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
        $categorias = Categoria::orderBy('id','DESC')->paginate(10);

        return view('admin.categorias.index')->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //categoria

        $categoria = new Categoria();

        $categoria->nombre = $request->nombre;
        $categoria->estado = $request->estado;

        $categoria->save();
        flash()->overlay('Categoria '.$categoria->nombre.' ha sido registrado', 'Categoria registrado');
        return redirect()->route('admin.categorias.index');
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
        $categoria = Categoria::find($id);

        return view('admin.categorias.edit')->with('categoria',$categoria);
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

        $categoria = Categoria::find($id);

        $categoria->nombre = $request->nombre;
        $categoria->estado = $request->estado;

        $categoria->save();
        flash()->overlay('Categoria '.$categoria->nombre.' ha sido actualizada', 'Categoria actualizada');
        return redirect()->route('admin.categorias.index');
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

        $categoria = Categoria::find($id);

        $categoria->delete();
        flash()->overlay('Categoria '.$categoria->nombre.' ha sido eliminada', 'Categoria eliminada');
        return redirect()->route('admin.categorias.index');
    }
}
