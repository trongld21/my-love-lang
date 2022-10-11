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
        Schema::create('edit_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_member_id');
            $table->integer('number_of_books');
            $table->integer('number_of_pdf');
            $table->integer('total_page');
            $table->date('deleted_at');
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
        Schema::dropIfExists('table_edit_items');
    }
};