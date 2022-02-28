<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'ランニングする'
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => '買い物する'
        ];
        DB::table('todos')->insert($param);
    }
}