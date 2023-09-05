<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article_categories')->insert([
            ['uri' => 'non-category' ,'name' => 'Без категории', 'description' => ''],
            ['uri' => 'construction' ,'name' => 'Строительство', 'description' => ''],
            ['uri' => 'repair' ,'name' => 'Ремонт', 'description' => ''],
            ['uri' => 'otdelka' ,'name' => 'Отделка', 'description' => ''],
            ['uri' => 'communication' ,'name' => 'Коммуникации', 'description' => ''],
        ]);
    }
}
