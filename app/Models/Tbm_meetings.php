<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbm_meetings extends Model
{
    // use HasFactory;
    protected $table = 'tbm_meetings';
    protected $fillable = ['external_id','name'];
}
