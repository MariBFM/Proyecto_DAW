<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function create(){
      return view('events');
    }
    /*Crea un evento desde 'Create_event', al crearse se redirije a home*/
    public function save(){
      $user_id = auth()->user()->id;

      Event::create([
        'user_ID' => $user_id,
        'day_event' => request('day'),
        'hour_event' => request('hour'),
        'title' => request('title'),
        'type' => request('type'),
        'description' => request('description')
      ]);

      return redirect()->route('home');
    }
    /*Mostrar los eventos del usuario en la página events*/
    public function show(){
      $user_id = auth()->user()->id;
      $event = Event::where('user_ID',$user_id)->get();
      return view('events',compact('event'));
    }
    /*Función para borrar evento desde la pagina events*/
    public function drop(Event $event){
      $event->delete();
      return redirect()->route('events');
    }
    /*Función que redirije a la página edit*/
    public function edit(Event $event){
      return view('edit', ['event'=> $event]);
    }
    /*Cogiendo los datos de edit se actualizan los datos del evento*/
    public function update(Event $event){
      $title = request('title');
      if(empty($title)){
        $title = $event->title;
      }

      $description = request('description');
      if(empty($description)){
        $title = $event->description;
      }

      $day = request('day');
      if(empty($day)){
        $day = $event->day_event;
      }
      $hour = request('hour');
      if(empty($hour)){
        $hour = $event->hour_event;
      }

      $event -> update([
        'title' => $title,
        'day_event' => $day,
        'hour_event' => $hour,
        'type' => request('type'),
        'description' => $description
      ]);

      return redirect()->route('events');
    }
}
