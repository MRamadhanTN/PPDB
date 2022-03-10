<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();
        $faker=Factory::create('id_ID');

        for($i = 1; $i < 4; $i++){
            DB::table('students')->insert([
                'stage_id' => 1,
                'academy_year_id' => 1,
                'name_siswa' => $faker->name('male'),
                'password' => Hash::make('student123'),
                'nisn' => $faker->numberBetween($max = 1000000000),
                'track' => $faker->randomElement(['reguler','prestasi','kurang mampu']),
                'birth_date' => $faker->date,
                'role' => 'student',
            ]);
        }
    }
}
