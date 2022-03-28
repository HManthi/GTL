<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbm_runners extends Model
{
    protected $table = 'tbm_runners';
    protected $fillable = ['external_id','name','horse_name','weight','race_id','colour'];
}
