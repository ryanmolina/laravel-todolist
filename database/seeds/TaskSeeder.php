<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();

        $limit = 69;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tasks')->insert([
                'title' => $faker->title,
                'description' => $faker->text,
            ]);
        }
    }
}
