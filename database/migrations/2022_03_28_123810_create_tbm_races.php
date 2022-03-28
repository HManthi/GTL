<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmRaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_races', function (Blueprint $table) {
            
                $table->bigIncrements('id');
                $table->string('external_id');
                $table->string('name');
                $table->float('distance');
                $table->bigInteger('meeting_id');
                $table->timestamps();
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbm_races');
    }
}
