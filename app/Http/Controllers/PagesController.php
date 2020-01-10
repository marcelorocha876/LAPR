<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**PAGES */

    public function aboutpage(){
        return view('pages.about');
    }

    public function colabs(){
        return view('pages.colabs');
    }

    public function personal_information_form(){
        return view('pages.perfilform');
    }

    public function perfil_pessoal(){
        return view('pages.perfilpessoal');
    }

    public function calendario(){
        return view('pages.calendario');
    }

    public function candidatura(){
        return view('pages.candidatura');
    }

    public function comprovativo_identificacao(){
        return view('pages.comprovativo_identificacao');
    }

    public function comprovativo_morada(){
        return view('pages.comprovativo_morada');
    }

    public function comprovativo_iban(){
        return view('pages.comprovativo_iban');
    }

    public function comprovativo_ausencia(){
        return view('pages.comprovativo_ausencia');
    }

    public function objetivospessoais(){
        return view('pages.objetivospessoais');
    }

    public function fazerpedido(){
        return view('pages.fazerpedido');
    }

    public function historicopedidos(){
        return view('pages.historicopedidos');
    }










}
