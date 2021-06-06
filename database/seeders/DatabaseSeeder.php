<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DDD\Domain\Fragment\Fragment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Fragment::factory()
            ->count(50)
            ->create();
    }
}
