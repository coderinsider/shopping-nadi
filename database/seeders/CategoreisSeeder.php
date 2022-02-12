<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CategoreisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'name' => 'Starters',
                'image' => 'mushrooms.jpg',
                'display_order' => '1',
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now'))
            ],
            [
                'name' => 'Salads',
                'image' => 'salad.jpg',
                'display_order' => '2',
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now'))
            ],
            [
                'name' => 'Entrees',
                'image' => 'burger.jpg',
                'display_order' => '3',
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now'))                
            ]
        ]);
    }
}
