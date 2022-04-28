<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {       /* action index */
        $nome = "Luis Henrique S F";
        $idade = 30;

        return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade
            ]);
    }

    public function criacao() {
        return view('eventos.criacao');
    }

    public function contato() {
        return view('eventos.contato');
    }

    

    public function produtos() {
        return view('eventos.produtos');
    }
}
