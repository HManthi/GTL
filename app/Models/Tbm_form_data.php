<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbm_form_data extends Model
{
    protected $table = 'tbm_form_data';
    protected $fillable = ['runner_id','age','sex','owner','game_date'];
}
