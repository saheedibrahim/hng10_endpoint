<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Information::create([
            'slack_name' => 'saolabram',
            'current_day' => date("l"),
            'utc_time' => date("Y-m-d\TH:i:sp"),
            'track' => 'backend',
            'github_file_url' => 'https://github.com/saheedibrahim/hng10_endpoint/blob/master/app/Http/Controllers/InformationController.php',
            'github_repo_url' => 'https://github.com/saheedibrahim/hng10_endpoint',
            'status_code' => 200
        ]);
    }
}
