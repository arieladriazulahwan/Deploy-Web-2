<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Ariel Adriazul Ahwan',
                'student_id_number' => 'F55123071',
                'email' => 'arieladriazul.a@gmail.com',
                'phone_number' => '6282296738898',
                'birth_date' => '2005-12-29',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'rey',
                'student_id_number' => 'F55123079',
                'email' => 'rey@gmail.com',
                'phone_number' => '6285323412112',
                'birth_date' => '2005-08-05',
                'gender' => 'male',
                'status' => 'Inactive',
                'major_id' => 2,
            ],
        ]);
    }
}