<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Event;       /* tenho acesso ao model Event */
use App\Models\User;

class EventController extends Controller
{
    /*public function index(){
        $events = CrudUsu::all();

        return view('welcome',['events' => $events]);
    } */

    //public function store(Request $request){


    public function index() {                         /* action index */


        $search = request('search');

        if($search) {

            $events = Event::where([
                ['titulo', 'like', '%' .$search. '%']
            ])->get();

        } else {

            $events = Event::all();     /* selecionando os dados do banco de dados */

        }

        return view('welcome',['events' => $events, 'search' => $search]);
    }

    public function criacao() {
        return view('eventos.criacao');
    }

    public function crud_user() {
        return view('eventos.crud_user');
    }

    /*public function store(Request $request) {

    $event = new Event;
    $event->nome = $request->nome;
    $event->date = $request->date;
    $event->cidade = $request->cidade;
    $event->email = $request->email;

    $event->save();

    return redirect('/'); */

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

        return redirect('/')->with('msg', 'Cradastro realizado !!!');       // criando a flash messages
    }



    public function show($id) {


        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('eventos.show', ['event' => $event, 'eventOwner' => $eventOwner]);

    }

    public function dashboard() {

        $user = auth()->user();

        $events = $user->event;

        return view('eventos.dashboard', ['eventos' => $events]);
    }

    public function destroy($id) {

        Event::findOrFail($id)->delete();  // encotrando esse evento do banco de dados pelo id passado na view

        return redirect('/dashboard')->with('msg', 'Excluido com sucessso!!!');
    }

    public function edit($id) {

        $event = Event::findOrFail($id);

        return view('eventos.edit', ['event' => $event]);
    }

    public function update(Request $request) {

        $data = $request->all();

        /* Image upload */
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalname() . strtotime("now") . "." . $extension);

            $request->image->move(public_path('img/evento'), $imageName);

            $data['image'] = $imageName;

        }

        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Evento editado com sucessso!!!');

    }

    public function joinEvent($id) {

        $user = auth()->user();

        //$user->eventAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua preseça esta confirmada no evento '. $event->tituloo);

    }


}
