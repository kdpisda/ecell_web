<?php

namespace App\Http\Controllers;
use App\Event;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show','get_event_detail']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('events')->where(
                'status','=','approved'
            )->get();
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
            return redirect('/admin/events');
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
        $len = strlen($id);
        $event_id = intval(substr($id, 8));        
        $event = DB::table('events')->where([
                ['event_id', '=', $event_id ],
                ['status','=','approved']
            ])->get();
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
<<<<<<< HEAD
        $metaName = time().'.'.$request->meta->getClientOriginalExtension();
        Event::where('event_id', $id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'details' => $request->details,
                'venue' => $request->venue,
                'user_id' => Auth::id(),
                'meta' => $metaName,
                ]);
=======
        try {
            if($request->meta != null){
                $metaName = time().'.'.$request->meta->getClientOriginalExtension();
            }
            else $metaName = null;
            Event::where('event_id', $id)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'details' => $request->details,
                    'venue' => $request->venue,
                    'user_id' => Auth::id(),
                    'meta' => $metaName,
                    ]);
        } catch (Exception $e) {
            Event::where('event_id', $id)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'details' => $request->details,
                    'venue' => $request->venue,
                    'user_id' => Auth::id(),                    
                    ]);
            var_dump($e);
        }
>>>>>>> 29cf5ade40b3b495e8de7105e037ff449ad27398
        // DB::table('events')
        //     ->where('event_id', $request->event_id)
        //     ->update([
                
        //     ]);
        $metaName = time().'.'.$request->meta->getClientOriginalExtension();
        $request->meta->move(public_path('uploads/events'), $metaName);
        // if($event->save()) {
<<<<<<< HEAD
            return redirect('/admin/events');
=======
            var_dump('updated!');
>>>>>>> 29cf5ade40b3b495e8de7105e037ff449ad27398
        // }
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
            'event_detail'=> $event[0]->details,
            'event_description'=> $event[0]->description,
            'event_pic' => $event[0]->meta,
            'event_venue' => $event[0]->venue,
            'event_time' => $event[0]->time,
        ]);
    }

    public function approve_event($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_event = Event::where('event_id',$id)
                            ->update(['status' => 'approved']);
                return response()->json([
                    'flag' => true,
                    'message' => 'Event has been approved successfully'
                ]);
            }
            catch (Exception $e) {
                return response()->json([
                    'flag' => false,
                    'message' => 'Sorry an error occured'
                ]);   
            }
        }
        else {
            return response()->json([
                    'flag' => false,
                    'message' => 'You do not have sufficient privilage'
                ]);   
        }
    }
    public function unapprove_event($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_event = Event::where('event_id',$id)
                            ->update(['status' => 'unapproved']);
                return response()->json([
                    'flag' => true,
                    'message' => 'Event has been unapproved successfully you can approve it again whenever you want'
                ]);
            }
            catch (Exception $e) {
                return response()->json([
                    'flag' => false,
                    'message' => 'Sorry an error occured'
                ]);   
            }
        }
        else {
            return response()->json([
                    'flag' => false,
                    'message' => 'You do not have sufficient privilage'
                ]);   
        }
    }
}
