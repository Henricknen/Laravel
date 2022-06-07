<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CrudUsu;     /* acesso ao mdoel CrudUsu */


class CrudUserController extends Controller
{
    public function index() {

        $crud_users = CrudUsu::all();

        return view('welcome',['crud_user' => $crud_users]);

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

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/participantes'), $imageName);

            $user->image = $imageName;

        }

        $user->save();

        return redirect('/')->with('msg', 'Cadastro realizado!!!');

    }
}
