<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Contacto;
use App\Empresa;
use App\Promocion;
use App\RedSocial;
use App\Servicio;
use App\Mail\EmailContacto;
use Illuminate\Support\Facades\Mail;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Categoria::orderBy('nombre','ASC')->where('estado','activo')->get();
        $contactenos = Contacto::orderBy('tipo','ASC')->where('estado','activo')->get();
        $empresa = Empresa::orderBy('nombre','ASC')->get()->first();
        $promociones = Promocion::orderBy('nombrePromocion','ASC')->get();
        $redesSociales = RedSocial::orderBy('red','ASC')->where('estado','activo')->get();
        $servicios = Servicio::orderBy('nombre','ASC')->where('estado','activo')->get();

        return view('site.welcome')->with('categorias',$categorias)->with('contactenos',$contactenos)->with('empresa',$empresa)->with('promociones',$promociones)->with('redesSociales',$redesSociales)->with('servicios',$servicios);

    }


    /**
     * Send email
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    {
        //

        $email = ['nombre'=>$request->nombre,'correo'=>$request->correo,'comentario'=>$request->comentario];
        $emailSend =(object)$email;
        Mail::to('dgerardo94@gmail.com')->send(new EmailContacto($emailSend));

        echo "Enviado";
    }


}
