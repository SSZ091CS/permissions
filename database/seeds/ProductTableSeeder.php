<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=> 'Test1',
            'detail'=> 'This Is a test Product',
        ]);
        DB::table('products')->insert([
            'name'=> 'Test2',
            'detail'=> 'This Is a test Product',
        ]);
        DB::table('products')->insert([
            'name'=> 'Test3',
            'detail'=> 'This Is a test Product',
        ]);
        DB::table('products')->insert([
            'name'=> 'Test4',
            'detail'=> 'This Is a test Product',
        ]);
    }
}
