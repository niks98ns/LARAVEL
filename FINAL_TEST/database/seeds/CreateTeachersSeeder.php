<?php

use Illuminate\Database\Seeder;
use App\Teacher;


class CreateTeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('admin'),
            ],
            [
               'name'=>'Teacher',
               'email'=>'teacher@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('user'),
            ],
        ];
  
        foreach ($teacher as $key => $value) {
            Teacher::create($value);
        }
    }
}
