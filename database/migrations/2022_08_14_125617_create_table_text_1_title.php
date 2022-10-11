<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_1_title', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('goal_trajectory_data_id');
            $table->string('format_1');
            $table->string('format_2');
            $table->string('format_3');
            $table->string('format_4');
            $table->string('format_5');
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
        Schema::dropIfExists('table_text_1_title');
    }
};