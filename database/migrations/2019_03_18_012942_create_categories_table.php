<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id')->comment('分类ID');
            $table->string('name',60)->comment('分类名称');
            $table->integer('pid')->default(0)->commnet('父分类');
            $table->tinyInteger('status')->default(1)->comment('分类状态：1启用，2禁用');
            $table->string('type',30)->default('category')->comment('分类类型:category分类，cover封面,specail专题');
            $table->string('template',100)->nullable()->default('')->comment('分类模版');
            $table->string('alias',100)->default('')->comment('分类别名');
            $table->string('class',100)->nullable()->default('')->comment('分类样式');
            $table->string('cover',100)->nullable()->default('')->comment('分类封面');
            $table->integer('view')->default(0)->comment('分类查看次数');
            $table->tinyInteger('order')->default(10)->comment('分类排序');
            $table->tinyInteger('isnav')->default(1)->comment('分类状态：1启用，2禁用');
            $table->string('desc',100)->nullable()->default('')->comment('描述');
           $table->timestamps();
        });
        DB::statement("ALTER TABLE categories comment'分类表' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
