<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Job;
use App\Models\User;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        // load job listings from data/job_listings.php
        $jobListings = include database_path('seeders/data/job_listings.php');

        // get user id's from user model
        $userIds = User::pluck('id')->toArray();

        foreach ($jobListings as &$listing) {
            // assign user id to listing
            $listing['user_id'] = $userIds[array_rand($userIds)];

            // add timestamps
            $listing['created_at'] = now();
            $listing['updated_at'] = now();
        }

        // insert job listings
        DB::table('job_listings')->insert($jobListings);

        echo "Jobs created successfully";
    }
}
