<?php

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
        $this->call(OrganizationTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(TeacherOrganizationTableSeeder::class);
        $this->call(UserOrganizationTableSeeder::class);
    }
}
