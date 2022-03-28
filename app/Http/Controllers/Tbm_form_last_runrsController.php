<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tbm_form_last_runrs;
use Illuminate\Support\Facades\DB;

class Tbm_form_last_runrsController extends Controller
{
    public function index(){

        // $races = tbm_races::all();
        $runner = DB::table('tbm_form_last_runrs')
                    ->join('tbm_runners','tbm_runners.id','=','tbm_form_last_runrs.runner_id')
                    ->join('tbm_races','tbm_races.id','=','tbm_runners.race_id')
                    ->join('tbm_meetings','tbm_meetings.id','=','tbm_races.meeting_id')
                    ->select('tbm_form_last_runrs.*','tbm_runners.name as runName','tbm_runners.id as runId')
                    ->get();

        $meet = DB::table('tbm_runners')
        ->select('tbm_runners.*','tbm_runners.name as rName','tbm_runners.id as rId')
        ->get();
        ;
        return view('admin.tbm_last_runner')->with('runner',$runner)->with('meet',$meet);
    }

    public function saveLastRunner(Request $request){

        $tbm_form_last_runrs = new Tbm_form_last_runrs;

        $tbm_form_last_runrs->runner_id = $request->input('runId');
        $tbm_form_last_runrs->condition = $request->input('condition');
        $tbm_form_last_runrs->payment = $request->input('pay');
        $tbm_form_last_runrs->game_date = $request->input('date');
        
        $tbm_form_last_runrs->save();

        return redirect('/last_runner')->with('success','Last Runner added successfully!');
    }
}
