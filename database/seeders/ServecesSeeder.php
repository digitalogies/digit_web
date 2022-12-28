<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServecesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i < 10 ; $i++)
        {
            DB::table('services')->insert([
                        'name'=>Str::random(10),
                        'slug'=>Str::random(10),
                        'description'=>Str::random(10),
                    ]);
        }

    }
}
