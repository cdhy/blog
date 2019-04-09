<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('设置ID');
            $table->string('name','30')->comment('名称');
            $table->string('var_name','30')->comment('变量名称');
            $table->string('content',150)->comment('设置内容');
            $table->tinyInteger('pid')->default(0)->comment('父ID');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE settings comment'设置表' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
