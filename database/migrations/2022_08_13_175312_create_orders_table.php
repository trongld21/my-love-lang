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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->bigInteger('project_id');
            $table->bigInteger('teacher_id');
            $table->string('name');
            $table->string('school_name');
            $table->string('post_code');
            $table->string('prefectures');
            $table->string('city_address');
            $table->string('detail_address');
            $table->string('phone_number');
            $table->string('email');
            $table->float('total_price');
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
        Schema::dropIfExists('orders');
    }
};