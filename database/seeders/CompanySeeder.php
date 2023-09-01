<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                // company info
                'name' => 'Forinterstroy',
                'additional_info' => 'Строительная компания',
                'description' => 'Строительство деревянных домов, бань, беседок и коттеджей. Любые размеры и количество этажей. Без предоплат. Опытные строители и доступная цена.',
                'logo' => 'http://via.placeholder.com/152x152',
                // contact
                'country' => 'Россия',
                'country_additional' => 'Россия',
                'state' => 'Томская область',
                'state_additional' => 'Томская область',
                'city' => 'Томск',
                'city_additional' => 'Северск',
                'street' => 'ул. Розы Люксембург',
                'street_additional' => 'ул. Транспортная',
                'house' => '102а стр. 2',
                'house_additional' => '30',
                // phone numbers 
                'phone' => '+7(913)820-89-08',
                'phone_additional' => '+7(3822)508-908',
                'email_address' => 'forinterstroi@yandex.ru',
                // social
                'youtube' => 'https://www.youtube.com/channel/UCeLSML_0uxBmS3bSXnaoB9g',
                'instagram' => 'https://www.instagram.com/forinterstroy/',
                'whatsapp' => 'https://wa.me/79138208908',
                'telegram' => 'https://t.me/forinterstroi',
                'vk' => 'https://vk.com/id168444454',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
