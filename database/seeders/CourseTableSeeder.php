<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')
            ->insert([
                [
                   'course_title'=>'php',
                   'course_content'=>'php kurs içerik',
                   'course_must'=>1
                ],
                [
                    'course_title'=>'bootstrap',
                    'course_content'=>'bootstrap kurs içerik',
                    'course_must'=>2
                ],
                [
                    'course_title'=>'JS',
                    'course_content'=>'JS kurs içerik',
                    'course_must'=>3
                ],
                [
                    'course_title'=>'LARAVEL 6',
                    'course_content'=>'LARAVEL 6 kurs içerik',
                    'course_must'=>4
                ],
            ]);
    }
}
