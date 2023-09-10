<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $data = [
        [
            'name' => 'PHP',
            'slug' => \\Str::slug('PHP'),
            'created_at' => now(),
        ],

        [
            'name' => 'Phyton',
            'slug' => \\Str::slug('Phyton'),
            'created_at' => now(), 
        ],

        [
            'name' => 'Java',
            'slug' => \\Str::slug('Java'),
            'created_at' => now(), 
        ],

        [
            'name' => 'C++',
            'slug' => \\Str::slug('C++'),
            'created_at' => now(), 
        ],

        [
            'name' => 'Ruby',
            'slug' => \\Str::slug('Ruby'),
            'created_at' => now(), 
        ],
    ];
    Category::insert($data);
    }
}
