<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developers')->insert([
            [
                'nama_developer' => 'Asep'
            ],
            [
                'nama_developer' => 'Sugeng'
            ],
            [
                'nama_developer' => 'Yoyok'
            ],
        ]);
    }
}
