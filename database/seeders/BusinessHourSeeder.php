<?php

namespace Database\Seeders;

use App\Models\BusinessHour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $days = config('appointment.days');

        foreach ($days as $day) {
            BusinessHour::query()->updateOrCreate([
                'day'   => $day,
            ], [
                'from'  => "9:00",
                'to'    => "17:00",
                'step'  => 30
            ]);
        }
    }
}
