<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductosController extends Controller
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
        $productos = Producto::orderBy('id','DESC')->paginate(10);
                
        return view('admin.productos.index')->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::orderBy('nombre','DESC')->where('estado','activo')->get();
        return view('admin.productos.create')->with('categorias',$categorias);
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
        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->id_categoria = $request->categoria;
        $producto->descripcion = $request->descripcion;
        $producto->estado = $request->estado;

        $producto->save();
        flash()->overlay('Producto '.$producto->nombre.' ha sido registrado', 'Producto registrado');
        return redirect()->route('admin.productos.index');

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
        $categorias = Categoria::orderBy('nombre','DESC')->where('estado','activo')->get();
        $producto = Producto::find($id);

        return view('admin.productos.edit')->with('producto',$producto)->with('categorias',$categorias);
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
        $producto = Producto::find($id);

        $producto->nombre = $request->nombre;
        $producto->id_categoria = $request->categoria;
        $producto->descripcion = $request->descripcion;
        $producto->estado = $request->estado;

        $producto->save();
        flash()->overlay('Producto '.$producto->nombre.' ha sido actualizado', 'Producto actualizado');
        return redirect()->route('admin.productos.index');
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

        $producto = Producto::find($id);
        $producto->delete();
        flash()->overlay('Producto '.$producto->nombre.' ha sido eliminado', 'Producto eliminado');
        return redirect()->route('admin.productos.index');
    }
}
