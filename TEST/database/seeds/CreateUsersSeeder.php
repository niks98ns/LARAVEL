<?php

use Illuminate\Database\Seeder;
use App\User;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'admin'=>'1',
               'password'=> bcrypt('admin'),
            ],
            [
               'name'=>'Teacher',
               'email'=>'teacher@gmail.com',
               'admin'=>'0',
               'password'=> bcrypt('teacher'),
            ],
            [
                'name'=>'Student',
                'email'=>'student@gmail.com',
                'admin'=>'0',
                'password'=> bcrypt('student'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
