<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TopCampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders/content/topcampus.txt');
        $data = File::get($file);
        $lines = explode(PHP_EOL, $data);

        foreach ($lines as $line) {
            if (!empty($line)) {
                $fields = explode('|', $line);

                DB::table('top_campuses')->insert([
                    'campus_id' => $fields[0],
                    'major_id' => $fields[1],
                ]);
            }
        }
    }
}
