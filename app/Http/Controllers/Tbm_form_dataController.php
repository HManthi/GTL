<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tbm_form_data;
use Illuminate\Support\Facades\DB;

class Tbm_form_dataController extends Controller
{
    public function index(){

        // $races = tbm_races::all();
        $runner = DB::table('tbm_form_data')
                    ->join('tbm_runners','tbm_runners.id','=','tbm_form_data.runner_id')
                    ->join('tbm_form_last_runrs','tbm_form_last_runrs.runner_id','=','tbm_form_data.runner_id')
                    ->join('tbm_races','tbm_races.id','=','tbm_runners.race_id')
                    ->join('tbm_meetings','tbm_meetings.id','=','tbm_races.meeting_id')
                    ->select('tbm_form_data.*','tbm_runners.name as runName','tbm_runners.id as runId')
                    ->get();

                    $meet = DB::table('tbm_runners')
                    ->select('tbm_runners.*','tbm_runners.name as rName','tbm_runners.id as rId')
                    ->get();
                    ;
        return view('admin.tbm_form_data')->with('runner',$runner)->with('meet',$meet);
    }

    public function saveFormData(Request $request){

        $tbm_form_data = new Tbm_form_data;

        $tbm_form_data->runner_id = $request->input('runId');
        $tbm_form_data->age = $request->input('age');
        $tbm_form_data->sex = $request->input('sex');
        $tbm_form_data->owner = $request->input('owner');
        $tbm_form_data->game_date = $request->input('game_date');  
        $tbm_form_data->save();

        return redirect('/form_data')->with('success','Form Data added successfully!');
    }
}
