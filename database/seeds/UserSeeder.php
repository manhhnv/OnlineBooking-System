<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'IdCard' => '123456789',
                'username' => 'manh117bg',
                'password' => bcrypt('18020881'),
                'hoten' => 'Nguyen Van Manh',
                'phone' => '0398566421',
            ]
        ];
        DB::table('users')->insert($data);
    }
}
