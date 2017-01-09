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

        factory(App\Models\Survey::class, 5)->create()->each(function ($survey) {
            $survey->options()->save(factory(App\Models\Option::class)->make());
        });
        factory(App\Models\Option::class, 30)->create()->each(function ($option) {
            $option->survey()->save(factory(App\Models\Survey::class)->make());
            $option->votes()->save(factory(App\Models\Vote::class)->make());
        });
        factory(App\Models\Vote::class, 40)->create()->each(function ($vote) {
            $vote->user()->save(factory(App\Models\User::class)->make());
            $vote->option()->save(factory(App\Models\Option::class)->make());
        });
    }
}
