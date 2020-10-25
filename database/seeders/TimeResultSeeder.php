<?php

namespace Database\Seeders;

use App\Models\TimeResult;
use Illuminate\Database\Seeder;

class TimeResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TimeResult::factory()
            ->times(50)
            ->create();
    }
}
