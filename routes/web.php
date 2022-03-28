<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tbm_meetingController;
use App\Http\Controllers\Tbm_racesController;
use App\Http\Controllers\Tbm_runnersController;
use App\Http\Controllers\Tbm_form_last_runrsController;
use App\Http\Controllers\Tbm_form_dataController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('admin.dashboard');
});


Route::get('meetings',[Tbm_meetingController::class, 'index']);
Route::post('/saveMeeting',[Tbm_meetingController::class, 'saveMeeting']);

Route::get('race',[Tbm_racesController::class, 'index']);
Route::post('/saveRace',[Tbm_racesController::class, 'saveRace']);

Route::get('runner',[Tbm_runnersController::class, 'index']);
Route::post('/saveRunner',[Tbm_runnersController::class, 'saveRunner']);

Route::get('last_runner',[Tbm_form_last_runrsController::class, 'index']);
Route::post('/saveLastRunner',[Tbm_form_last_runrsController::class, 'saveLastRunner']);

Route::get('form_data',[Tbm_form_dataController::class, 'index']);
Route::post('/saveFormData',[Tbm_form_dataController::class, 'saveFormData']);