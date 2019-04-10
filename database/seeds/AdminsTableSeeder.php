<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //`email`, `name`, `mobile`, `password`, `status`, `ip`, `avator`
        DB::table('admins')->insert([
            'email'    => '38668499@qq.com',
            'name'     => 'huangyi',
            'mobile'   => '18627426019',
            'password' => bcrypt(123456),
            'status'   => 1,
            'ip'       => 3232235976,
            'avator'   => 'asset/image/user.pic',
            'created_at' => '2019-04-05 07:30:00',
            'updated_at' => '2019-04-06 10:10:15'
        ]);
        DB::table('admins')->insert([
            'email'    => 'john@163.com',
            'name'     => 'John',
            'mobile'   => '13807360003',
            'password' => bcrypt(123456),
            'status'   => 1,
            'ip'       => 3232235976,
            'avator'   => 'asset/image/user.pic',
            'created_at' => '2019-04-05 07:32:08',
            'updated_at' => '2019-04-05 08:11:18'
        ]);
        DB::table('admins')->insert([
            'email'    => 'tom@163.com',
            'name'     => 'Tom',
            'mobile'   => '13807360002',
            'password' => bcrypt(123456),
            'status'   => 1,
            'ip'       => 3232235976,
            'avator'   => 'asset/image/user.pic',
            'created_at' => '2019-04-05 08:04:28',
            'updated_at' => '2019-04-05 11:12:33'
        ]);
        DB::table('admins')->insert([
            'email'    => 'king@163.com',
            'name'     => 'King',
            'mobile'   => '13807360001',
            'password' => bcrypt(123456),
            'status'   => 1,
            'ip'       => 3232235976,
            'avator'   => 'asset/image/user.pic',
            'created_at' => '2019-04-05 13:25:33',
            'updated_at' => '2019-04-06 19:15:45'
        ]);
    }
}
