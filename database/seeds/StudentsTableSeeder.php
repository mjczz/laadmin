<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Student::class, 50)->create()->each(function ($s) {
            $s->prepays()->save(factory(App\Prepay::class)->make());
        });
    }
}
