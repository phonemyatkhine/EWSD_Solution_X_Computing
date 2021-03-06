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
        $this->call(UserRolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AcademicYearSeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(UserFacultySeeder::class);
        $this->call(MagazineIssueSeeder::class);
        $this->call(TestingAccountSeeder::class);
    }
}
