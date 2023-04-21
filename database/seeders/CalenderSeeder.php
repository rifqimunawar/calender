<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Carbon\CarbonTimeZone;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CalenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('bookings')->insert([
        'title' => Str::random(10),
        'start_date' => Carbon::now()->format('Y-m-d'),
        'end_date' => Carbon::now()->format('Y-m-d'),
        'created_at' => Carbon::now()->format('Y-m-d'),
        'updated_at' => Carbon::now()->format('Y-m-d'),
    ]);
      DB::table('bookings')->insert([
        'title' => Str::random(10),
        'start_date' => Carbon::now()->format('Y-m-d'),
        'end_date' => Carbon::now()->format('Y-m-d'),
        'created_at' => Carbon::now()->format('Y-m-d'),
        'updated_at' => Carbon::now()->format('Y-m-d'),
    ]);
      DB::table('bookings')->insert([
        'title' => Str::random(10),
        'start_date' => Carbon::now()->format('Y-m-d'),
        'end_date' => Carbon::now()->format('Y-m-d'),
        'created_at' => Carbon::now()->format('Y-m-d'),
        'updated_at' => Carbon::now()->format('Y-m-d'),
    ]);

    }
}
