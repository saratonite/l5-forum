<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index()
    {
        
        return view('forum.ask');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $this->validate($request, [
        'title' => 'required|max:255',
        'content' => 'required',
        ]);


        $q = new \App\Question();

        $q->fill($request->all());
        $q->user_id = Auth::user()->id;
        if($q->save())
        {
            Session::flash('message',"Question submitted successfully :) ");
        }
            return redirect('ask');
        
    }
    public function show($id)
    {
        
        $question = \App\Question::with('answers')->find($id);

        return view('forum.question.show',compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reply(Request $request,$id)
    {
        
        $this->validate($request, [
        'answer' => 'required'
        ]);

        $answer = new \App\Answer();
        $answer->answer = $request->get('answer');
        $answer->question_id = $id;
        $answer->user_id = Auth::user()->id;
        if($answer->save()){
            Session::flash('message',"Answer submitted , Thank you .");
        }

        return redirect('question/'.$id);
    }

    
}
