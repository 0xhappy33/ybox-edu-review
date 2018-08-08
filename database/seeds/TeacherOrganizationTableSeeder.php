<?php

use Illuminate\Database\Seeder;

class TeacherOrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_organization')->insert(
            [
                'teacher_id' => factory(App\Teacher::class)->create()->id,
                'organization_id' => factory(App\Organization::class)->create()->id,
            ]
        );
    }
}
