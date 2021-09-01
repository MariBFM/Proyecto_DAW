<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $day = Carbon::now();
        $query_day = request()->query('day');
        if(!empty($query_day)){
          $day=Carbon::parse($query_day);
        }
        $events = Event::where('user_ID',$user_id)->where('day_event',$day->format('Y-m-d'))->get();
        return view('home', compact('events','day'));
    }

}
