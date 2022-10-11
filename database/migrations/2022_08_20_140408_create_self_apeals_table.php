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
        Schema::dropIfExists('self_apeals');
        Schema::create('self_apeals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('edit_item_id');
            $table->boolean('self_apeal_flag');
            $table->integer('article_count');
            $table->integer('page_count')->default(2);
            $table->timestamps();
        });
        DB::table('self_apeals')->insert(
            [
                'edit_item_id' => '1',
                'self_apeal_flag' => '1',
                'article_count' => '1',
                'page_count'=>2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
        DB::table('self_apeals')->insert(
            [
                'edit_item_id' => '2',
                'self_apeal_flag' => '1',
                'article_count' => '1',
                'page_count'=>2,
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
        Schema::dropIfExists('self_apeals');
    }
};
