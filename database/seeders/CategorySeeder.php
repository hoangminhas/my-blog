<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name'=>'Society']);
        DB::table('categories')->insert(['name'=>'Politics']);
        DB::table('categories')->insert(['name'=>'Self Development']);
        DB::table('categories')->insert(['name'=>'Music']);
    }
}
