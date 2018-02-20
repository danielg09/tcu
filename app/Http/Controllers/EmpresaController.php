<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
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
        $empresas = Empresa::orderBy('id','DESC')->get();

        return view('admin.empresa.index')->with('empresas',$empresas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.empresa.create');
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
       
        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            //creale un nombre unico imagen
            $name = 'logo'. time() . '.' . $file->getClientOriginalExtension();
            //ruta donde queremos guardar la imagen
            //public_path() ruta donde esta nuestro proyecto
            $path = public_path() . '\logo';
            $file->move($path,$name);
        }

        $empresa = new Empresa();

        $empresa->nombre = $request->nombre;
        $empresa->cedulaJuridica = $request->cedulaJuridica;
        $empresa->mision = $request->mision;
        $empresa->vision = $request->vision;
        $empresa->acercaDe = $request->acercaDe;
        $empresa->logo = '/logo/'.$name;

        $empresa->save();

        flash()->overlay('Empresa '.$empresa->nombre.' ha sido registrado', 'Empresa registrado');
        return redirect()->route('admin.empresa.index');
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
        $empresa = Empresa::find($id);

        return view('admin.empresa.edit')->with('empresa',$empresa);
    }

    public function editLogo($id)
    {
        //
        $empresa = Empresa::find($id);

        return view('admin.empresa.editLogo')->with('empresa',$empresa);
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


        $empresa = Empresa::find($id);

        $empresa->nombre = $request->nombre;
        $empresa->cedulaJuridica = $request->cedulaJuridica;
        $empresa->mision = $request->mision;
        $empresa->vision = $request->vision;
        $empresa->acercaDe = $request->acercaDe;

        $empresa->save();

        flash()->overlay('Empresa '.$empresa->nombre.' ha sido actualizado', 'Empresa actualizado');
        return redirect()->route('admin.empresa.index');

    }

    public function updateLogo(Request $request, $id)
    {
        //

        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            //creale un nombre unico imagen
            $name = 'logo'. time() . '.' . $file->getClientOriginalExtension();
            //ruta donde queremos guardar la imagen
            //public_path() ruta donde esta nuestro proyecto
            $path = public_path() . '\logo';
            $file->move($path,$name);
        }

        $empresa = Empresa::find($id);

        $empresa->logo = '/logo/'.$name;

        $empresa->save();

        flash()->overlay('Empresa '.$empresa->nombre.' ha sido actualizado el logo', 'Empresa actualizado');
        return redirect()->route('admin.empresa.index');

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
        $empresa = Empresa::find($id);

        $empresa->delete();
        flash()->overlay('Empresa '.$empresa->nombre.' ha sido eliminado', 'Empresa eliminado');
        return redirect()->route('admin.empresa.index');
    }
}
