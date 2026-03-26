<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Child;
use App\Models\Donation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::updateOrCreate(
            ['email' => 'admin@goodsamaritans.org'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'is_active' => true,
                'email_verified_at' => now(),
            ]
        );

        // Create sample donor user
        User::updateOrCreate(
            ['email' => 'donor@example.com'],
            [
                'name' => 'John Donor',
                'password' => Hash::make('password'),
                'role' => 'donor',
                'is_active' => true,
                'email_verified_at' => now(),
            ]
        );

        // Create sample children
        $children = [
            [
                'name' => 'Sarah A.',
                'age' => 8,
                'date_of_birth' => '2016-05-15',
                'gender' => 'female',
                'background_story' => 'Sarah arrived from DRC with her grandmother after losing her parents to conflict.',
                'admission_date' => '2020-01-10',
                'status' => 'active',
                'education_level' => 'Grade 2',
            ],
            [
                'name' => 'David M.',
                'age' => 10,
                'date_of_birth' => '2014-08-22',
                'gender' => 'male',
                'background_story' => 'David was orphaned at age 5 and has shown remarkable resilience.',
                'admission_date' => '2019-03-15',
                'status' => 'active',
                'education_level' => 'Grade 4',
            ],
            [
                'name' => 'Grace K.',
                'age' => 6,
                'date_of_birth' => '2018-02-10',
                'gender' => 'female',
                'background_story' => 'Grace loves to sing and dreams of becoming a teacher.',
                'admission_date' => '2021-06-20',
                'status' => 'active',
                'education_level' => 'Grade 1',
            ],
        ];

        foreach ($children as $child) {
            Child::updateOrCreate(
                ['name' => $child['name']],
                $child
            );
        }

        // Create sample donation
        Donation::updateOrCreate(
            ['transaction_id' => 'TXN-SAMPLE-001'],
            [
                'user_id' => 2,
                'transaction_id' => 'TXN-SAMPLE-001',
                'amount' => 100.00,
                'type' => 'one_time',
                'status' => 'completed',
                'payment_method' => 'credit_card',
                'currency' => 'USD',
                'completed_at' => now(),
            ]
        );
    }
}