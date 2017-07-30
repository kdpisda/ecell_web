<?php 

namespace App\Http\Controllers;
use Auth;
use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SponsorsController extends Controller{
    
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show','getSponsorDetail','getSponsorsList']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = DB::table('sponsors')->where(
                'status','=','approved'
            )->get();
        return view('sponsors.index', ['sponsors' => $data]);
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
        $sponsor = new Sponsor;
        $sponsor->name = $request->name;
        $sponsor->description = $request->description;
        $sponsor->owner = $request->owner;
        $sponsor->contact_no = $request->contact_no;
        $sponsor->contact_email = $request->contact_email;
        $sponsor->address = $request->address;
        $sponsor->user_id = Auth::id();
        $metaName = time().'.'.$request->meta->getClientOriginalExtension();
        $request->meta->move(public_path('uploads/sponsors'), $metaName);
        $sponsor->meta = $metaName;

        if($sponsor->save()) {
            return redirect('/admin/sponsors');
        }
    }

    /**
     * Display the specified resource.
     *$sponsor->name = $request->name;
        $sponsor->description = $request->description;
        $sponsor->owner = $request->owner;
        $sponsor->contact_no = $request->contact_no;
        $sponsor->contact_email = $request->contact_email;
        $sponsor->address = $request->address;
        $sponsor->user_id = Auth::id();
        $sponsor->venue = 'NULL';
        $metaName = time().'.'.$request->meta->getClientOriginalExtension();
        $request->meta->move(public_path('uploads/sponsors'), $metaName);
        $sponsor->meta = $metaName;
     * @param  \App\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $len = strlen($id);
        $sponsor_id = intval(substr($id, 7));        
        $sponsor = DB::table('sponsors')->where([
                ['sponsor_id', '=', $sponsor_id ],
                ['status','=','approved']
            ])->get();
        return view('sponsors.show', ['sponsor' => $sponsor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->meta == null){
            Sponsor::where('sponsor_id', '=' ,$id)
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
            Sponsor::where('sponsor_id', '=' ,$id)
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
            $request->meta->move(public_path('uploads/sponsors'), $metaName);
        }
        return redirect('/admin/sponsors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        //
    }

    public function getSponsorDetail($id){
        $sponsor = DB::table('sponsors')->where('sponsor_id', '=', $id)->get();
        return response()->json([
            'sponsor_id' => $sponsor[0]->sponsor_id,
            'sponsor_name' => $sponsor[0]->name,
            'sponsor_description'=> $sponsor[0]->description,
            'sponsor_pic' => $sponsor[0]->meta,
            'sponsor_owner' => $sponsor[0]->owner,
            'sponsor_contact_no' => $sponsor[0]->contact_no,
            'sponsor_contact_email' => $sponsor[0]->contact_email,
            'sponsor_address' => $sponsor[0]->address
        ]);
    }
    
    public function approveSponsor($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_event = Sponsor::where('sponsor_id',$id)
                            ->update(['status' => 'approved']);
                return response()->json([
                    'flag' => true,
                    'message' => 'Sponsor has been approved successfully'
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

    public function unapproveSponsor($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_event = Sponsor::where('sponsor_id',$id)
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

    public function getSponsorsList(){
        $sponsors = DB::table('sponsors')->where(
                'status','=','approved'
            )->get();
        return response($sponsors->toJson());
    }
}
