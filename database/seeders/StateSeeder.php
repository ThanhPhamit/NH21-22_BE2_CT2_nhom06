<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state')->insert([
            [
                'state_name' => "To confirm",
            ],
            [
                'state_name' => "To receive",
            ],
            [
                'state_name' => "Delivered",
            ],
            [
                'state_name' => "Cancelled",
            ],
        ]);
    }
}