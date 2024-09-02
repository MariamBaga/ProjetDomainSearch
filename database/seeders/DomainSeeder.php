<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Domain;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domains = [
            [
                'name' => 'example',
                'extension' => 'com',
                'price' => 9.99,
                'duration' => 1,
                'status' => 'available',
            ],
            [
                'name' => 'testdomain',
                'extension' => 'net',
                'price' => 12.99,
                'duration' => 2,
                'status' => 'reserved',
            ],
            [
                'name' => 'mywebsite',
                'extension' => 'org',
                'price' => 15.00,
                'duration' => 3,
                'status' => 'unavailable',
            ],
            [
                'name' => 'exampledomain',
                'extension' => 'info',
                'price' => 8.50,
                'duration' => 1,
                'status' => 'available',
            ],
            [
                'name' => 'myblog',
                'extension' => 'biz',
                'price' => 7.75,
                'duration' => 5,
                'status' => 'reserved',
            ],
        ];

        foreach ($domains as $domain) {
            Domain::create($domain);
        }
    }
    }

