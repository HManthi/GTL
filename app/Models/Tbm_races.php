<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbm_races extends Model
{
    protected $table = 'tbm_races';
    protected $fillable = ['external_id','name','distance','meeting_id'];
}
