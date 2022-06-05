<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CrudUsu;     /* acesso ao mdoel CrudUsu */


class CrudUserController extends Controller
{
    public function index() {

        $crud_user = CrudUsu::all();

        return view('welcome',['crud_user' => $crud_user]);

    }

    public function crud_user() {
        return view('eventos.crud_user');
    }

    public function store(Request $request) {

        $user = new CrudUsu;

        $user->nome = $request->nome;
        $user->date = $request->date;
        $user->cidade = $request->cidade;
        $user->email = $request->email;
        $user->email = $request->email;

        $user->save();

        return redirect('/')->with('msg', 'Cradastro realizado !!!');

    }
}
