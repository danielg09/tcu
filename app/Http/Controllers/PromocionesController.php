<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promocion;

class PromocionesController extends Controller
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
        $promociones = Promocion::orderBy('id','DESC')->paginate(10);

        return view('admin.promociones.index')->with('promociones',$promociones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.promociones.create');
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

        if ($request->hasFile('archivo')) {

            $file = $request->file('archivo');
            //creale un nombre unico imagen
            $name = $file->getClientOriginalName() . time() . '.' . $file->getClientOriginalExtension();
            //ruta donde queremos guardar la imagen
            //public_path() ruta donde esta nuestro proyecto
            $path = public_path() . '\promociones';
            $file->move($path,$name);
        }

        $promocion = new Promocion();

        $promocion->nombrePromocion = $request->nombre;
        $promocion->ubicacionArchivo = '/promociones/'.$name;

        $promocion->save();

        flash()->overlay('Promocion '.$promocion->nombre.' ha sido registrado', 'Promocion registrado');
        return redirect()->route('admin.promociones.index');
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
        $promocion = Promocion::find($id);

        return view('admin.promociones.edit')->with('promocion',$promocion);
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
        if ($request->hasFile('archivo')) {

            $file = $request->file('archivo');
            //creale un nombre unico imagen
            $name = $file->getClientOriginalName() . time() . '.' . $file->getClientOriginalExtension();
            //ruta donde queremos guardar la imagen
            //public_path() ruta donde esta nuestro proyecto
            $path = public_path() . '\promociones';
            $file->move($path,$name);
        }

        $promocion = Promocion::find($id);

        $promocion->nombrePromocion = $request->nombre;
        $promocion->ubicacionArchivo = '/promociones/'.$name;

        $promocion->save();

        flash()->overlay('Promocion '.$promocion->nombre.' ha sido actualizado', 'Promocion actualizado');
        return redirect()->route('admin.promociones.index');

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
        $promocion = Promocion::find($id);

        $promocion->delete();

        flash()->overlay('Promocion '.$promocion->nombre.' ha sido elimminada', 'Promocion eliminada');
        return redirect()->route('admin.promociones.index');
    }
}
