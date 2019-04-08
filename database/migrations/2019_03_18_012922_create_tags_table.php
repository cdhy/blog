<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id')->comment('标签ID');
            $table->string('name', 20)->unique()->comment('标签名');
            $table->string('image', 50)->default('')->comment('缩略图');
            $table->string('desc')->default('')->comment('描述');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE tags comment'标签表' ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
