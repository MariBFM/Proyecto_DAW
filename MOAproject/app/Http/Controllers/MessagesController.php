<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageRecived;

class MessagesController extends Controller
{
    public function index()
    {
      return view('footer.contact');
    }
    public function store()
    {
      $message = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'text' => 'required|min:3'
      ],[
        'name.required' => __('I need your name')
      ]);

      Mail::to('myorganizativeagenda@gmail.com')->queue(new MessageRecived($message));

      return redirect()->route('welcome');
    }
}
