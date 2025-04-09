<?php

namespace App\Services;

use App\Models\Student;

class StudentService
{
    public function getStudents()
    {
        return Student::all();
    }
}