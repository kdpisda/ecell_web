<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\QuestionSet;
use Auth;

class QuestionsController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show','getQuestionDetail','getQuestionsList']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = DB::table('questions')->where(
                'status','=','approved'
            )->get();
        return view('questions.index', ['questions' => $data]);
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

        $timeLimit = $request->minutes.":".$request->seconds;
        var_dump($timeLimit);
        $question = new Question;
        $question->question = $request->question;
        $question->description = $request->description;
        $question->timelimit = $timeLimit;
        $question->question_type = $request->question_type;
        $question->score = $request->score;
        $question->meta = $request->meta;
        $question->question_set = $request->question_set;
        $question->user_id = Auth::id();
        $metaName = time().'.'.$request->meta->getClientOriginalExtension();
        $request->meta->move(public_path('uploads/questions'), $metaName);
        $metaName = json_encode($metaName);
        $question->meta = $metaName;
        
        // if($question->save()) {
        //     var_dump($question);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $len = strlen($id);
        $question_id = intval(substr($id, 7));        
        $question = DB::table('questions')->where([
                ['question_id', '=', $question_id ],
                ['status','=','approved']
            ])->get();
        return view('questions.show', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->meta == null){
            Question::where('question_id', '=' ,$id)
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
            Question::where('question_id', '=' ,$id)
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
            $request->meta->move(public_path('uploads/questions'), $metaName);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }

    public function getQuestionDetail($id){
        $question = DB::table('questions')->where('question_id', '=', $id)->get();
        return response()->json([
            'question_id' => $question[0]->question_id,
            'question_name' => $question[0]->name,
            'question_description'=> $question[0]->description,
            'question_pic' => $question[0]->meta,
            'question_owner' => $question[0]->owner,
            'question_contact_no' => $question[0]->contact_no,
            'question_contact_email' => $question[0]->contact_email,
            'question_address' => $question[0]->address
        ]);
    }
    
    public function approveQuestion($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_question = Question::where('question_id',$id)
                            ->update(['status' => 'approved']);
                return response()->json([
                    'flag' => true,
                    'message' => 'Question has been approved successfully'
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

    public function unapproveQuestion($id){
        $user = Auth::user();
        if($user->user_type == "ADMIN"){
            try{
                $temp_question = Question::where('question_id',$id)
                            ->update(['status' => 'unapproved']);
                return response()->json([
                    'flag' => true,
                    'message' => 'Question has been unapproved successfully you can approve it again whenever you want'
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

    public function getquestionsList(){
        $questions = DB::table('questions')->where(
                'status','=','approved'
            )->get();
        return response($questions->toJson());
    }
}
