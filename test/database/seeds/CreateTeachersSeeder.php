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
               'email'=>'admin@itsolutionstuff.com',
                'is_admin'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Teacher',
               'email'=>'teacher@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($teacher as $key => $value) {
            Teacher::create($value);
        }
    }
}
