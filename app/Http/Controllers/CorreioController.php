<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorreioController extends Controller
{
    /** CORREIO */

    public function entrada(){
        return view('correio.entrada');
    }

    public function enviado(){
        return view('correio.enviado');
    }

    public function compor(){
        return view('correio.compor');
    }

}
