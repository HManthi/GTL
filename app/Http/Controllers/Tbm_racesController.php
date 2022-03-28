<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Tbm_races;
use Illuminate\Http\Request;

class Tbm_racesController extends Controller
{
    //
    public function index(){

        // $races = tbm_races::all();
        $races = DB::table('tbm_races')
                    ->join('tbm_meetings','tbm_meetings.id','=','tbm_races.meeting_id')
                    ->select('tbm_races.*','tbm_meetings.name as mName','tbm_meetings.id as mId')
                    ->get();

        $meet = DB::table('tbm_meetings')
        ->select('tbm_meetings.*','tbm_meetings.name as mName','tbm_meetings.id as mId')
        ->get();
        ;
        return view('admin.tbm_races')->with('races',$races)->with('meet',$meet);
    }

    public function saveRace(Request $request){

        $tbm_races = new tbm_races;

        $tbm_races->external_id = $request->input('id');
        $tbm_races->name = $request->input('raceName');
        $tbm_races->meeting_id = $request->input('meetId');
        $tbm_races->distance = $request->input('distance');

        $tbm_races->save();

        return redirect('/race')->with('success','Meeting added successfully!');
}
}
