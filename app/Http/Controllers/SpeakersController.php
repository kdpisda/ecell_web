<?php 

namespace App\Http\Controllers;
use Auth;
use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpeakersController extends Controller{
    
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show','getSpeakerDetail','getSpeakersList']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = DB::table('speakers')->where(
                'status','=','approved'
            )->get();
        return view('speakers.index', ['speakers' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $speaker = new Speaker;
        $speaker->name = $request->name;
        $speaker->description = $request->description;
        $speaker->contact_no = $request->contact_no;
        $speaker->contact_email = $request->contact_email;
        $speaker->user_id = Auth::id();
        $metaName = time().'.'.$request->meta->getClientOriginalExtension();
        $request->meta->move(public_path('uploads/speakers'), $metaName);
        $speaker->meta = $metaName;

        if($speaker->save()) {
            return redirect('/admin/speakers');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $len = strlen($id);
        $speaker_id = intval(substr($id, 7));        
        $speaker = DB::table('speakers')->where([
                ['speaker_id', '=', $speaker_id ],
                ['status','=','approved']
            ])->get();
        return view('speakers.show', ['speaker' => $speaker]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function edit(Speaker $speakers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->meta == null){
            Speaker::where('speaker_id', '=' ,$id)
                ->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'owner' => $request->owner,
                    'contact_no' => $request->contact_no,
                    'contact_email' => $request->contact_email,
                    'address' => $request->address,
                    'user_id' => Auth::id(),
                ]);
        }else{
            $metaName = time().'.'.$request->meta->getClientOriginalExtension();
            Speaker::where('speaker_id', '=' ,$id)
                ->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'owner' => $request->owner,
                    'contact_no' => $request->contact_no,
                    'contact_email' => $request->contact_email,
                    'address' => $request->address,
                    'user_id' => Auth::id(),
                    'meta' => $metaName,
                ]);
            $metaName = time().'.'.$request->meta->getClientOriginalExtension();
            $request->meta->move(public_path('uploads/speakers'), $metaName);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speaker $speaker)
    {
        //
    }

    public function getSpeakerDetail($id){
        $speaker = DB::table('speakers')->where('speaker_id', '=', $id)->get();
        return response()->json([
            'speaker_id' => $speaker[0]->speaker_id,
            'speaker_name' => $speaker[0]->name,
            'speaker_description'=> $speaker[0]->description,
            'speaker_pic' => $speaker[0]->meta,
            'speaker_owner' => $speaker[0]->owner,
            'speaker_contact_no' => $speaker[0]->contact_no,
            'speaker_contact_email' => $speaker[0]->contact_email,
            'speaker_address' => $speaker[0]->address
        ]);
    }
    
    public function approveSpeaker($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_event = Speaker::where('speaker_id',$id)
                            ->update(['status' => 'approved']);
                return response()->json([
                    'flag' => true,
                    'message' => 'Speaker has been approved successfully'
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

    public function unapproveSpeaker($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_event = Speaker::where('speaker_id',$id)
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

    public function getSpeakersList(){
        $speakers = DB::table('speakers')->where(
                'status','=','approved'
            )->get();
        return response($speakers->toJson());
    }
}
