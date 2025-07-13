<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // clear existing data
       DB::table('users')->truncate();
       DB::table('job_listings')->truncate();

        // seed users
        $this->call(RandomUserSeeder::class);

        // seed jobs
        $this->call(JobSeeder::class);
    }
}
