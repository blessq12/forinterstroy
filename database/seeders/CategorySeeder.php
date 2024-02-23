<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['uri' => 'bath', 'name' => 'Бани из бруса', 'description' => 'Бани из бруса под ключ по выгодным ценам в Томске и Томской области от компании «Форинтерстрой». Лучшие технологические решения строительства. 508-908', 'image' => '/uploads/categories/wood_bath.jpg'],
            ['uri' => 'houses', 'name' => 'Дома из бруса', 'description' => 'Строительство деревянных домов из бруса. Любых размеров, любое количество этажей и мансард. Опытные строители и доступная цена. Гарантия результата.', 'image' => '/uploads/categories/wood_house.jpg'],
            ['uri' => 'karkas', 'name' => 'Каркасные дома', 'description' => 'Построй каркасный дом своей мечты с «Форинтерстрой». Работаем без предоплаты. Большой выбор продуманных проектов. Только высшее качество.', 'image' => '/uploads/categories/karkas.jpg'],
            ['uri' => 'dacha', 'name' => 'Дачные дома', 'description' => '«Форинтерстрой» осуществляет строительство дачных домов по демократичным ценам. Большой выбор и прозрачные условия договора. Гарантии качества.', 'image' => '/uploads/categories/lighthouse.jpg'],
            ['uri' => 'besedki', 'name' => 'Беседки', 'description' => 'Беседка из бруса будет долгие годы украшать ваш участок, станет любимым местом отдыха и загородного уединения.', 'image' => '/uploads/categories/besedki.jpg'],
            ['uri' => 'a-frame', 'name' => 'А-фрейм', 'description' => 'Конструкция дома, которая отличается высокой двухскатной крышей от фундамента до конька. Крыша заменяет две стены дома', 'image' => '/uploads/categories/a-frame.jpg'],
        ]);
    }
}
