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
        Schema::dropIfExists('project');
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('teacher_id')->nullable();
            $table->bigInteger('student_id')->nullable();
            $table->integer('number_of_members');
            $table->integer('total_of_not_started')->nullable();
            $table->integer('total_of_under_construction')->nullable();
            $table->integer('total_of_completion')->nullable();
            $table->integer('total_books')->nullable();
            $table->integer('total_pdf')->nullable();
            $table->boolean('complete_flag')->nullable();
            $table->boolean('inprogress_flag')->nullable();
            $table->boolean('order_flag')->nullable();
            $table->date('deadline');
            $table->timestamps();
        });
        DB::table('project')->insert(
            [
                'title' => 'project 1',
                'teacher_id' => '1',
                'student_id' => '1',
                'number_of_members' => 27,
                'total_of_not_started' => 20,
                'total_of_under_construction' => 2,
                'total_of_completion' => 5,
                'total_books' => 2,
                'total_pdf' => 5,
                'complete_flag' => true,
                'order_flag' => false,
                'inprogress_flag' => false,
                'deadline' => '2023-01-22 15:41:03',
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
        DB::table('project')->insert(
            [
                'title' => 'project 2',
                'teacher_id' => '1',
                'student_id' => '1',
                'number_of_members' => 6,
                'total_of_not_started' => 3,
                'total_of_under_construction' => 1,
                'total_of_completion' => 2,
                'total_books' => 6,
                'total_pdf' => 6,
                'complete_flag' => false,
                'order_flag' => false,
                'inprogress_flag' => true,
                'deadline' => '2022-12-09 15:41:03',
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
        DB::table('project')->insert(
            [
                'title' => 'project 3',
                'teacher_id' => '1',
                'student_id' => '1',
                'number_of_members' => 18,
                'total_of_not_started' => 10,
                'total_of_under_construction' => 3,
                'total_of_completion' => 5,
                'total_books' => 2,
                'total_pdf' => 5,
                'complete_flag' => true,
                'order_flag' => false,
                'inprogress_flag' => false,
                'deadline' => '2022-07-14 15:41:03',
                'created_at' => now(),
                'updated_at' => now()
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
        Schema::dropIfExists('project');
    }
};