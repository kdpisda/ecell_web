<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestionSet;
use Illuminate\Support\Facades\DB;
use Auth;

class QuestionSetsController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show','getQuestionSetDetail','getQuestionSetsList']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $questionSet = new QuestionSet;
        $questionSet->name = $request->set_name;
        $questionSet->set = $request->set_number;
        $questionSet->description = $request->description;
        if($request->meta != null && $request->meta != ''){
            $metaName = time().'.'.$request->meta->getClientOriginalExtension();
            $request->meta->move(public_path('uploads/questionSets'), $metaName);
            $questionSet->meta = $metaName;
        }
        $questionSet->user_id = Auth::id();
        if($questionSet->save()) {
            return redirect('/admin/questionSets');
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
        //
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
    public function update(Request $request, $id){
        if($request->meta == null){
            QuestionSet::where('question_set_id', $id)
                ->update([
                    'name' => $request->set_name,
                    'set' => $request->set_number,
                    'description' => $request->description,
                    'user_id' => Auth::id(),
                    ]);
        }else{
            $metaName = time().'.'.$request->meta->getClientOriginalExtension();
            $request->meta->move(public_path('uploads/questionSets'), $metaName);
            Event::where('question_set_id', $id)
                ->update([
                    'name' => $request->set_name,
                    'set' => $request->set_number,
                    'description' => $request->description,
                    'user_id' => Auth::id(),
                    'meta' => $metaName,
                    ]);
        }
        return redirect('/admin/questionSets');
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

    /**
     * Get particular question set, It would act as an api
     *
     *@return \Illuminate\Http\Response
     */
    public function getQuestionSetDetail($id){
        $questionSet = DB::table('question_sets')->where('question_set_id', '=', $id)->get();
        return response()->json([
            'question_set_id' => $questionSet[0]->question_set_id,
            'question_set_name' => $questionSet[0]->name,
            'question_set_number'=> $questionSet[0]->set,
            'question_set_meta'=> $questionSet[0]->meta,
            'question_set_description' => $questionSet[0]->description,
        ]);
    }

    /**
     * Get Question Set Details, It would act as an api
     *
     *@return \Illuminate\Http\Response
     */
    public function getQuestionSetsList(){
        $speakers = DB::table('question_sets')->where(
                'status','=','approved'
            )->get();
        return response($speakers->toJson());
    }
    
    public function approveQuestionSet($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_event = QuestionSet::where('question_set_id',$id)
                            ->update(['status' => 'approved']);
                return response()->json([
                    'flag' => true,
                    'message' => 'Question Set has been approved successfully'
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

    public function unapproveQuestionSet($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_event = QuestionSet::where('question_set_id',$id)
                            ->update(['status' => 'unapproved']);
                return response()->json([
                    'flag' => true,
                    'message' => 'Question Set has been unapproved successfully you can approve it again whenever you want'
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
