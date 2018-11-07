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
			$this->call(UsersTableSeeder::class);
			$this->call(StudentsTableSeeder::class);
			$this->call(StudentClassOutSeeder::class);
			$this->call(StudentClassInSeeder::class);
			$this->call(StudentClassNowSeeder::class);
			$this->call(StudentClassFollowSeeder::class);
			$this->call(StudentMoneySeeder::class);
			$this->call(PrepaySeeder::class);
    }
}
