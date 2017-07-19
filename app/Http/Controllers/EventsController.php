<?php

namespace App\Http\Controllers;
use App\Event;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        $event->details = $request->details;
        $event->venue = $request->venue;
        $event->user_id = Auth::id();
        $metaName = time().'.'.$request->meta->getClientOriginalExtension();
        $request->meta->move(public_path('uploads/events'), $metaName);
        $event->meta = $metaName;

        if($event->save()) {
            var_dump('added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = DB::table('events')->where('event_id', '=', $id)->get();
        return view('events.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function get_event_detail($id){
        $event = DB::table('events')->where('event_id', '=', $id)->get();
        return response()->json([
            'event_id' => $event[0]->event_id,
            'event_name' => $event[0]->title,
            'event_details'=> $event[0]->details,
            'event_description'=> $event[0]->description,
            'event_pic' => $event[0]->meta,
        ]);
    }
}
