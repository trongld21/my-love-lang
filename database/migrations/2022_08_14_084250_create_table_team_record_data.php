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
        Schema::create('team_record_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('team_record_id');
            $table->string('format');
            $table->string('my_post');
            $table->string('comment_1');
            $table->string('comment_2');
            $table->string('comment_3');
            $table->string('photo_1');
            $table->string('photo_2');
            $table->string('photo_3');
            $table->string('photo_4');
            $table->date('posted_date');
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
        Schema::dropIfExists('table_team_record_data');
    }
};