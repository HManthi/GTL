<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbm_form_last_runrs extends Model
{
    protected $table = 'tbm_form_last_runrs';
    protected $fillable = ['runner_id','condition','payment','game_date'];
}
