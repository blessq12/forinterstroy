<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            ['uri' => '/', 'title' => 'Форинтерстрой', 'description' => 'Строительство деревянных домов, бань, беседок и коттеджей. Любые размеры и количество этажей. Без предоплат. Опытные строители и доступная цена.'],
            ['uri' => '/catalog', 'title' => 'Каталог проектов', 'description' => 'Мы собрали все проекты в одном месте, чтобы было удобнее ориентироваться'],
            ['uri' => '/slug_cat', 'title' => 'Каталог услуг', 'description' => 'Все услуги нашей компании в одном месте и в доступном виде'],
            ['uri' => '/portfoli', 'title' => 'Портфолио', 'description' => 'Вы можете ознакомиться с нашими работами на этой странице'],
            ['uri' => '/blog', 'title' => 'Каталог статей', 'description' => 'Статьи на сайте , прочтите основные материалы по строительству, а также полезные советы по строительству и ремонту домов и квартир'],
            ['uri' => '/contact', 'title' => 'Контакты', 'description' => 'Здесь вы можете найти всё что мы можем вам предложить.'],
            ['uri' => '/privacy', 'title' => 'Политика безопасности', 'description' => 'Общие положения политики конфидециальности и обработки персональных данных'],
        ]);
    }
}
