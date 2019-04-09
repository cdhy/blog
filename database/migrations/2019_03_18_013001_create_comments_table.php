<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id')->comment('评论ID');
            $table->integer('user_id')->default(1)->comment('用户ID');
            $table->integer('article_id')->default(1)->comment('文章ID');
            $table->string('content')->comment('评论内容');
            $table->tinyInteger('status')->default(1)->comment('状态:1显示,2不显示');
            $table->unsignedInteger('ip')->comment('评论IP');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE comments comment'评论表' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
