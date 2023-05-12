<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;
use Database\Factories\PersonFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::factory(200)->createQuietly();
    }
}
