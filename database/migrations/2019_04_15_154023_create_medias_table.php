<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->increments('id')->comment('附件ID');
            $table->string('original_name')->comment('原始文件名');
            $table->enum('type',['acover','cover','face','apic','zip','pro','doc'])->comment('上传类型');
            $table->string('md5')->comment("文件MD5");
            $table->string('path')->comment('新文件名');
            $table->string('generate')->nullable()->default('')->comment('处理后的位置');
            $table->string('desc')->nullable()->default('')->comment('描述');
        });
        DB::statement("ALTER TABLE medias comment'附件表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medias', function (Blueprint $table) {
        });
    }
}
