<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Ramsey\Uuid\Type\Integer;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacher =  Teacher::factory(50)->create();

    }
}
