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
        Schema::create('self_apeals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('edit_item_id');
            $table->string('self_apeal_flag');
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
        Schema::dropIfExists('table_self_apeals');
    }
};