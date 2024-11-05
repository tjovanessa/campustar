<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders/content/major.txt');
        $data = File::get($file);
        $lines = explode(PHP_EOL, $data);

        foreach ($lines as $line) {
            if (!empty($line)) {
                $fields = explode('|', $line);

                DB::table('majors')->insert([
                    'name' => $fields[0],
                    'description' => $fields[1],
                    'status' => $fields[2],
                    'logo' => $fields[3],
                    'banner' => $fields[4],
                    'career' => $fields[5],
                    'reason' => $fields[6],
                    'curriculum' => $fields[7],
                ]);
            }
        }
    }
}
