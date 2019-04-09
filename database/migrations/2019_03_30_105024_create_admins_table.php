<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->smallIncrements('id')->comment('管理员ID');
            $table->string('email',40)->unique()->comment('邮箱');
            $table->string('name',40)->comment('管理员姓名');
            $table->string('password')->comment('管理员密码');
            $table->string('avator',60)->comment('管理员头像');
            $table->string('mobile',11)->unique()->comment('管理员手机');
            $table->tinyInteger('status')->default(1)->comment('管理员状态：1启用2禁用');
            $table->unsignedInteger('ip')->default(0)->comment('登录IP');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE admins comment'管理员表' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
