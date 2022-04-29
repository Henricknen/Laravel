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

    public function contato() {
        return view('eventos.contato');
    }



    public function produtos() {
        return view('eventos.produtos');
    }
}
