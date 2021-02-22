<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Beach = 1, Mountain = 2, Desert = 3
        DB::table('articles')->insert([
            'userid' => '1',
            'categoryid' => '2',
            'title' => 'Keajaiban Kawah Ijen',
            'description' => 'Fenomena api biru Kawah Ijen menjadi sorotan dunia.',
            'image' => 'bluefire.jpg'
        ]);
        DB::table('articles')->insert([
            'userid' => '1',
            'categoryid' => '2',
            'title' => 'Keajaiban Kawah Ijen',
            'description' => 'Fenomena api biru Kawah Ijen menjadi sorotan dunia.',
            'image' => 'bluefire.jpg'
        ]);
        DB::table('articles')->insert([
            'userid' => '1',
            'categoryid' => '1',
            'title' => 'Sanur Sejuk',
            'description' => 'Suasana Tenang Pantai Sanur yang memanjakan mata.',
            'image' => 'sanur.jpg'
        ]);
        DB::table('articles')->insert([
            'userid' => '1',
            'categoryid' => '1',
            'title' => 'Sanur Sejuk',
            'description' => 'Suasana Tenang Pantai Sanur yang memanjakan mata.',
            'image' => 'sanur.jpg'
        ]);
        DB::table('articles')->insert([
            'userid' => '1',
            'categoryid' => '3',
            'title' => 'Gurun Telaga Biru',
            'description' => 'Gurun yang menjadi hidden gem.',
            'image' => 'guruntelagabiru.jpg'
        ]);
        DB::table('articles')->insert([
            'userid' => '1',
            'categoryid' => '3',
            'title' => 'Gurun Telaga Biru',
            'description' => 'Gurun yang menjadi hidden gem.',
            'image' => 'guruntelagabiru.jpg'
        ]);
    }
}
