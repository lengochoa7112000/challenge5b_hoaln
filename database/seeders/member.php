<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class member extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('member')->insert([
            'username' => 'teacher2',
            'password' => '123456a@A',
            'fullname' => 'Phạm Văn Khánh',
            'email' => 'teacher2@gmail.com',
            'phone' => '0123456789',
            'role' => 'teacher',
            'message_to' => '',
            'recipient' => '',
            'avatar_name' => '',
            'avatar_location' => '',
        ]);
        \DB::table('member')->insert([
            'username' => 'teacher1',
            'password' => '123456a@A',
            'fullname' => 'Nguyễn Xuân Hoàng',
            'email' => 'teacher1@gmail.com',
            'phone' => '0123456789',
            'role' => 'teacher',
            'message_to' => '',
            'recipient' => '',
            'avatar_name' => '',
            'avatar_location' => '',
        ]);
        \DB::table('member')->insert([
            'username' => 'student1',
            'password' => '123456a@A',
            'fullname' => 'Lê Ngọc Hoa',
            'email' => 'student1@gmail.com',
            'phone' => '0123456789',
            'role' => 'student',
            'message_to' => '',
            'recipient' => '',
            'avatar_name' => '',
            'avatar_location' => '',
        ]);
        \DB::table('member')->insert([
            'username' => 'student2',
            'password' => '123456a@A',
            'fullname' => 'Lê Ngọc Hoa Test',
            'email' => 'student2@gmail.com',
            'phone' => '0123456789',
            'role' => 'student',
            'message_to' => '',
            'recipient' => '',
            'avatar_name' => '',
            'avatar_location' => '',
        ]);
    }
}
