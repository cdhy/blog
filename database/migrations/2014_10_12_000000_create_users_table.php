<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('用户ID');
            $table->string('name')->comment('用户名');
            $table->string('email')->unique()->comment('用户邮箱');
            $table->string('mobile')->unique()->comment('用户手机');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('用户密码');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE users comment'用户表' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
