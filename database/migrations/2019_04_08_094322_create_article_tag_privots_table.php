<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateArticleTagPrivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tag_privots', function (Blueprint $table) {
           $table->increments('id')->comment('关联表ID');
           $table->integer('article_id')->comment('文章ID');
           $table->integer('tag_id')->comment('标签ID');
           $table->timestamps();
        });
        DB::statement("ALTER TABLE article_tag_privots comment'文章标签关联表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_tag_privots');
    }
}
