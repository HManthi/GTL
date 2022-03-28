<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmRunners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_runners', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->string('external_id');
                $table->string('name');
                $table->string('horse_name');
                $table->string('colour');
                $table->string('weight');
                $table->bigInteger('race_id');
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
        Schema::dropIfExists('tbm_runners');
    }
}
