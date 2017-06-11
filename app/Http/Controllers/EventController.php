<?php

namespace App\Http\Controllers;

use App\Event;
use Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Event::all();
        return view('events.index', ['events' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Event = new Event;

        $Event->heading = $request->heading;
        $Event->description = $request->description;
        $Event->status = 'inprocess';
        $Event->user_id = Auth::id();

        if($Event->save()) {
            var_dump('added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $Event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $Event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $Event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $Event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $Event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $Event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $Event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $Event)
    {
        //
    }
}
