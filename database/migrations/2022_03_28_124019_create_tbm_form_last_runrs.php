<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFormLastRunrs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_form_last_runrs', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('runner_id');
                $table->string('condition');
                $table->float('payment');
                $table->date('game_date');                
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
        Schema::dropIfExists('tbm_form_last_runrs');
    }
}
