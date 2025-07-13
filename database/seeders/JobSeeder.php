<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Bring in jobs from a file
        $jobs = include database_path('seeders/data/job_listings.php');

        // Bring in users from user model
        $userIds = User::pluck('id')->toArray();

        // Prepare job data
        foreach ($jobs as &$job) {
            $job['user_id'] = $userIds[array_rand($userIds)];
            $job['created_at'] = now();
            $job['updated_at'] = now();
        }

        // Insert job data into the database
        DB::table('job_listings')->insert($jobs);
        echo count($jobs) . " job listings seeded successfully.\n";
    }
}
