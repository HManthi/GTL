<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Tbm_runners;

class Tbm_runnersController extends Controller
{
    public function index(){

        // $races = tbm_races::all();
        $runner = DB::table('tbm_runners')
                    ->join('tbm_races','tbm_races.id','=','tbm_runners.race_id')
                    ->join('tbm_meetings','tbm_meetings.id','=','tbm_races.meeting_id')
                    ->select('tbm_runners.*','tbm_races.name as raceName','tbm_races.id as raceId')
                    ->get();

        $runnerAll = DB::table('tbm_runners')
        ->join('tbm_races','tbm_races.id','=','tbm_runners.race_id')
        ->join('tbm_meetings','tbm_meetings.id','=','tbm_races.meeting_id')
        ->join('tbm_form_last_runrs','tbm_form_last_runrs.runner_id','=','tbm_runners.id')
        ->join('tbm_form_data','tbm_form_data.runner_id','=','tbm_runners.id')
        ->select('tbm_runners.*','tbm_races.*','tbm_runners.name as runName','tbm_meetings.*','tbm_meetings.name as meetName','tbm_meetings.id as meetId','tbm_form_last_runrs.*','tbm_form_data.*','tbm_races.name as raceName','tbm_races.id as raceId')
        ->get();

        $meet = DB::table('tbm_races')
        ->select('tbm_races.*','tbm_races.name as rName','tbm_races.id as rId')
        ->get();
        ;
        return view('admin.tbm_runners')->with('runner',$runner)->with('meet',$meet)->with('runnerAll',$runnerAll);
    }

    public function saveRunner(Request $request){

        $tbm_runners = new tbm_runners;

        $tbm_runners->external_id = $request->input('id');
        $tbm_runners->name = $request->input('runName');
        $tbm_runners->race_id = $request->input('raceId');
        $tbm_runners->horse_name = $request->input('horseName');
        $tbm_runners->weight = $request->input('weight');
        $tbm_runners->colour = $request->input('colour');

        $tbm_runners->save();

        return redirect('/runner')->with('success','Runner added successfully!');
    }
}
