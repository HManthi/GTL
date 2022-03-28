<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbm_meetings;

class Tbm_meetingController extends Controller
{
    //
    public function index(){

        $meetings = Tbm_meetings::all();
        return view('admin.tbm_meeting')->with('meetings',$meetings);
    }

    public function saveMeeting(Request $request){

            $tbm_meetings = new Tbm_meetings;

            $tbm_meetings->external_id = $request->input('id');
            $tbm_meetings->name = $request->input('meetingName');

            $tbm_meetings->save();

            return redirect('/meetings')->with('success','Meeting added successfully!');
    }
}
