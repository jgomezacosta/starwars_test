<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Starships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Starships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('model')->index();
            $table->string('starship_class');
            $table->string('manufacturer');
            $table->string('cost_in_credits');
            $table->string('length');
            $table->string('crew');
            $table->string('passengers');
            $table->string('max_atmosphering_speed');
            $table->string('hyperdrive_rating');
            $table->string('MGLT');
            $table->string('cargo_capacity');
            $table->string('consumables');

            $table->string('films');
            $table->string('pilots');

            $table->string('url');

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Starships');
    }
}
