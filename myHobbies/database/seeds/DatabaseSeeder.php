<?php

use App\Models\Hobby;
use App\Models\Tag;
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
        // $this->call(UserSeeder::class);
        $this->call(HobbySeeder::class);
        $this->call(TagSeeder::class);
    }
}
