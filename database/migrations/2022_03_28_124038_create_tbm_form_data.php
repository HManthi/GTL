<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFormData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_form_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('runner_id');
            $table->string('age');
            $table->string('sex');
            $table->string('owner');
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
        Schema::dropIfExists('tbm_form_data');
    }
}
