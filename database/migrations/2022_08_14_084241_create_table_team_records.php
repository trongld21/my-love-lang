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
        Schema::create('team_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('edit_item_id');
            $table->string('team_record_flag');
            $table->integer('article_count');
            $table->integer('page_count');
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
        Schema::dropIfExists('table_team_records');
    }
};