<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $threads = \App\Models\Thread::all();


        $threads->each->replies()->create([
            "user_id"   => factory(\App\User::class)->create()->id,
            "content"   => $faker->paragraph,
        ]);

    }
}
