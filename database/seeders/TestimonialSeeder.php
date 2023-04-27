<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonial')->insert([
            [
                'name' => 'Maftuna Aliyeva',
                'text' => 'Qora shokolad sutli shokoladga qaraganda ancha foydaliroq bo\'lgan ayol uchun, Uzona shokoladning har xil turlari siz uchun mavjud. Men bu shokoladlarni o\'tkazishdan juda xursandman.',
                'img' => 'galgadot.jpg',
                'created_at' => '2023-04-05 23:31:25',
                'updated_at' => '2023-04-22 22:54:38',
            ],
            [
                'name' => 'Shahzoda Yunusaliyeva',
                'text' => 'Shokolad tarkibida teobromin deb ataladigan modda borligi sababli o\'zining oladlari uchun shokoladdan buzilishi xavfli hisoblanadi. Lekin Uzona shokoladda bo\'lgan qanday tarkib qachonki bu xavfli emas, balki foydali hisoblanadi. Shokoladni xohlaganlarga maslahat beraman!',
                'img' => 'selena.jpg',
                'created_at' => '2023-04-06 05:58:05',
                'updated_at' => '2023-04-02 23:31:25',
            ],
            [
                'name' => 'Shahzod Abdurashidov',
                'text' => 'Meksikaning ba’zi shtatlarida xalq tabiblari odamlarni shokolad ichishdan ehtiyot bo\'lishadi. Ammo, Uzona shokolad tarkibidagi xavfli moddalarni ajratib chiqish borasida muxlis bo\'lganlar uchun, bunday shokolad mutlaqo xavfsiz. Uzona shokolad sifatli va o\'zingizga qulay chiqqan turdagi shokoladlarni taqdim etadi.',
                'img' => 'tom.jpg',
                'created_at' => '2023-04-28 06:02:46',
                'updated_at' => '2023-04-02 06:02:46',
            ],
        ]);
    }
}
