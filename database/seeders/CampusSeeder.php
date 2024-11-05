<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders/content/campus.txt');
        $data = File::get($file);
        $lines = explode(PHP_EOL, $data);

        foreach ($lines as $line) {
            if (!empty($line)) {
                $fields = explode('|', $line);

                DB::table('campuses')->insert([
                    'name' => $fields[0],
                    'description' => $fields[1],
                    'status' => $fields[2],
                    'logo' => $fields[3],
                    'banner' => $fields[4],
                    'location' => $fields[5],
                    'accreditation' => $fields[6],
                    'web' => $fields[7],
                    'email' => $fields[8],
                    'phone' => $fields[9],
                    'address' => $fields[10],
                ]);
            }
        }
    }
}
