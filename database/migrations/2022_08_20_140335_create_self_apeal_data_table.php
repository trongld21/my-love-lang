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
        Schema::dropIfExists('self_apeal_data');
        Schema::create('self_apeal_data', function (Blueprint $table) {
            $table->id();
            $table->integer('self_apeal_id');
            $table->string('title');
            $table->string('text');
            $table->timestamps();
        });
        DB::table('self_apeal_data')->insert(
            [
                'self_apeal_id' => '1',
                'title' => 'テニス部部長を務めました',
                'text' => 'テニス部でキャプテンを務めていた経験から、課題に対 する解決策を考えて実行し、成果へとつなげることに自 信があります ',
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
        DB::table('self_apeal_data')->insert(
            [
                'self_apeal_id' => '2',
                'title' => 'テニス部部長を務めましたテニス',
                'text' => 'テニス部でキャプテンを務めていた経験から、課題に対 する解決策を考えて実行し、成果へとつなげることに自 信があります 成果へとつなげることに自 ',
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
        Schema::dropIfExists('self_apeal_data');
    }
};
