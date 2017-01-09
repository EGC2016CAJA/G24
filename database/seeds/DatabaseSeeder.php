<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\User::class, 20)->create();
        factory(App\Models\Survey::class, 5)->create();
        factory(App\Models\Option::class, 30)->create();
        factory(App\Models\Vote::class, 40)->create();
    }
}
