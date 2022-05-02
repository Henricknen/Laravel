<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index() {       /* action index */

        $search = request('search');

        if($search) {

            $events = Event::where([
                ['titulo', 'like', '%' .$search. '%']
            ])->get();

        } else {

            $events = Event::all();

        }

        return view('welcome',['events' => $events, 'search' => $search]);
    }

    public function criacao() {
        return view('eventos.criacao');
    }

    public function store(Request $request) {

        $event = new Event;

        $event->titulo = $request->titulo;
        $event->date = $request->date;
        $event->cidade = $request->cidade;
        $event->descricao = $request->descricao;
        $event->privado = $request->privado;
        $event->items = $request->items;

        /* Image upload */
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalname() . strtotime("now") . "." . $extension);

            $request->image->move(public_path('img/evento'), $imageName);

            $event->image = $imageName;

        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento marcado com sucesso !!!');       // criando a flash messages
    }

    public function show($id) {

        $event = Event::findOrFail($id);

        return view('eventos.show', ['event' => $event]);

    }

    public function contato() {
        return view('eventos.contato');
    }



    public function produtos() {
        return view('eventos.produtos');
    }
}
