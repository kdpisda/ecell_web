<?php

namespace App\Http\Controllers;
use Auth;
use App\Startup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StartupsController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show','getStartupDetail','getStartupsList']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('startups')->where(
                'status','=','approved'
            )->get();
        return view('startups.index', ['startups' => $data]);
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
        $startup = new Startup;
        $startup->name = $request->name;
        $startup->description = $request->description;
        $startup->owner = $request->owner;
        $startup->contact_no = $request->contact_no;
        $startup->contact_email = $request->contact_email;
        $startup->address = $request->address;
        $startup->user_id = Auth::id();
        $metaName = time().'.'.$request->meta->getClientOriginalExtension();
        $request->meta->move(public_path('uploads/startups'), $metaName);
        $startup->meta = $metaName;
        if($startup->save()) {
            return redirect('/admin/startups');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Startups  $startups
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Slicing id from custom startup id
        // STRTUP00 id default hence slicing
        // and converting it to int the resultent ID 
        $startup_id = intval(substr($id, 7));        
        $startup = DB::table('startups')->where([
                ['startup_id', '=', $startup_id ],
                ['status','=','approved']
            ])->get();
        return view('startups.show', ['startup' => $startup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Startups  $startups
     * @return \Illuminate\Http\Response
     */
    public function edit(Startup $startup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Startups  $startups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->meta == ''){
            Startup::where('startup_id', '=' ,$id)
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
            Startup::where('startup_id', '=' ,$id)
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
            $request->meta->move(public_path('uploads/startups'), $metaName);
        }
        return redirect('/admin/startups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Startups  $startups
     * @return \Illuminate\Http\Response
     */
    public function destroy(Startup $startup)
    {
        //
    }

    public function getStartupDetail($id){
        $startup = DB::table('startups')->where('startup_id', '=', $id)->get();
        return response()->json([
            'startup_id' => $startup[0]->startup_id,
            'startup_name' => $startup[0]->name,
            'startup_description'=> $startup[0]->description,
            'startup_pic' => $startup[0]->meta,
            'startup_owner' => $startup[0]->owner,
            'startup_contact_no' => $startup[0]->contact_no,
            'startup_contact_email' => $startup[0]->contact_email,
            'startup_address' => $startup[0]->address
        ]);
    }
    public function approveStartup($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_event = Startup::where('startup_id',$id)
                            ->update(['status' => 'approved']);
                return response()->json([
                    'flag' => true,
                    'message' => 'Startup has been approved successfully'
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

    public function unapproveStartup($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_event = Startup::where('startup_id',$id)
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

    public function getStartupsList(){
        $startups = DB::table('startups')->where(
                'status','=','approved'
            )->get();
        return response($startups->toJson());
    }
}
