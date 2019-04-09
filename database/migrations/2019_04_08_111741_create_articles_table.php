<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 80)->comment('文章标题');
            $table->string('subtitle', 80)->comment('副标题');
            $table->string('slug',100)->default('')->comment('slug帮忙SEO');
            $table->string('keywords',150)->default('')->comment('关键字');
            $table->string('description',150)->default('')->comment('描述');
            $table->integer('click')->default(0)->comment('查看次数');
            $table->smallInteger('author')->default(1)->comment('作者');
            $table->tinyInteger('is_index')->default(1)->comment('是否首页显示1:显示，2不显示');
            $table->tinyInteger('is_hot')->default(1)->comment('是否热门1:是，2否');
            $table->tinyInteger('is_recommended')->default(1)->comment('是否推荐1:是，2否');
            $table->integer('category_id')->default(1)->comment('分类');
            $table->string('cover', 60)->default('')->comment('封面');
            $table->text('content')->comment('内容');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE articles comment'文章表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
