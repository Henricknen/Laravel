<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index() {       /* action index */

        $events = Event::all();

        return view('welcome',['events' => $events]);
    }

    public function criacao() {
        return view('eventos.criacao');
    }

    public function store(Request $request) {

        $event = new Event;

        $event->titulo = $request->titulo;
        $event->cidade = $request->cidade;
        $event->descricao = $request->descricao;
        $event->privado = $request->privado;

        /* Image upload */
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalname() . strtotime("now") . "." . $extension);

            $request->image->move(public_path('img/evento'), $imageName);

            $event->image = $imageName;

        }

        $event->save();

        return redirect('/')->with('msg', 'Evento marcado com sucesso !!!');       // criando a flash messages
    }

    public function contato() {
        return view('eventos.contato');
    }



    public function produtos() {
        return view('eventos.produtos');
    }
}
