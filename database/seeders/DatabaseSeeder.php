<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::truncate();
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Student::factory(15)->create();

        $path = database_path('data/pinoy-students.json');
        $file = file_get_contents($path);
        $students = json_decode($file, true);
        $student_array = [];

        foreach ($students as $student) {
            array_push($student_array, [
                'name' => $student['name'],
                'course' => Student::COURSES[array_rand(Student::COURSES)],
                'age' => fake()->numberBetween(18, 22),
                'address' => $student['address'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        Student::factory()->createMany($student_array);
    }
}
