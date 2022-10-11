<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::dropIfExists('students');
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id');
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->string('avatar');
            $table->timestamps();
        });
        DB::table('students')->insert(
            [
                'student_id' => '3',
                'email' => 'gotechjsc@gmail.com',
                'password' => 'gotech123',
                'name' => 'Gotech',
                'avatar' => ''
            ],
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};