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
        Schema::create('goal_trajectory_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('goal_trajectory_id');
            $table->string('format');
            $table->string('text_1');
            $table->string('text_2');
            $table->string('text_3');
            $table->string('text_4');
            $table->string('action_goal_1');
            $table->string('action_goal_2');
            $table->string('action_goal_3');
            $table->string('action_icon_1');
            $table->string('action_icon_2');
            $table->string('action_icon_3');
            $table->date('start_at');
            $table->date('ended_at');
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
        Schema::dropIfExists('table_goal_trajectory_data');
    }
};