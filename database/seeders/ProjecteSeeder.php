<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjecteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Projecte::factory()
            ->count(5)
            ->has(\App\Models\Tasca::factory()->count(5))
            ->create();
    }
}
