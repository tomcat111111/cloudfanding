<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();

        DB::table('admins')->insert([
            'name' => 'スマートファンディング管理者',
            'email' => 'smartfunding@example.com',
            'password' => bcrypt('smartfund001'),
        ]);
    }
}
