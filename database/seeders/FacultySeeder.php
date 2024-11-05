<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders/content/faculty.txt');
        $data = File::get($file);
        $lines = explode(PHP_EOL, $data);

        foreach ($lines as $line) {
            if (!empty($line)) {
                $fields = explode('|', $line);

                DB::table('faculties')->insert([
                    'name' => $fields[0],
                    'major' => $fields[1],
                    'campus_id' => $fields[2],
                ]);
            }
        }
    }
}
