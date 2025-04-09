<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    const COURSES = [
        'BS Information Technology',
        'BS Civil Engineering',
        'BS Computer Science',
        'BS Information Systems',
        'BS Computer Engineering',
        'BS Psychology',
        'BS Business Administration',
        'BS Accountancy',
        'BS Marketing'];
}
