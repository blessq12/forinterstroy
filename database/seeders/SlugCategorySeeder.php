<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlugCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slug_categories')->insert([
           ['uri' => 'inside', 'name' => 'Внутренние работы', 'description' => 'Это заключительный этап строительства или ремонта зданий. Их выполняют для того, чтобы защитить конструкции дома от воздействия внешней среды, создать комфортные условия проживания, придать дому завершенный вид.', 'image' => '/uploads/slug_categories/inside.jpg'],
           ['uri' => 'outside', 'name' => 'Фасадные работы', 'description' => 'Это любые работы, которые происходят с внешней стороны здания: штукатурные, облицовочные или малярные работы.', 'image' => '/uploads/slug_categories/outside.jpg'],
           ['uri' => 'design', 'name' => 'Дизайн домов', 'description' => 'В большом доме можно спокойно воплотить даже монументальные варианты дизайна, с массивной мебелью, сложными конструкциями и тяжелыми элементами – в любом случае пространство не будет выглядеть загроможденным.', 'image' => '/uploads/slug_categories/design.jpg'],
           ['uri' => 'demontazh', 'name' => 'Демонтажные работы', 'description' => 'В большом доме можно спокойно воплотить даже монументальные варианты дизайна, с массивной мебелью, сложными конструкциями и тяжелыми элементами – в любом случае пространство не будет выглядеть загроможденным.', 'image' => '/uploads/slug_categories/demontazh.jpg'],
           ['uri' => 'communications', 'name' => 'Инженерные коммуникации', 'description' => 'Непременный атрибут любого здания и сооружения бытового или промышленного назначения. Это системы отопления, холодного и горячего водоснабжения, электроснабжения, канализация, вентиляционная система.', 'image' => '/uploads/slug_categories/communications.jpg'],
           ['uri' => 'found', 'name' => 'Фундамент', 'description' => 'Cтроительная несущая конструкция, часть здания, сооружения, которая воспринимает все нагрузки от вышележащих конструкций и распределяет их по основанию.', 'image' => '/uploads/slug_categories/foundament.jpg'],
        ]);
    }
}
