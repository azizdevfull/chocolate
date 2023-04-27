<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            [
                'title' => 'ChocoLux Haqida',
                'text' => 'Shokolad yurak-qon tomir faoliyatiga ijobiy ta\'sir qiladi. Uning moddalar tarkibi yurak kasalliklarini oldini olishda muhim ahamiyatga egadir. Bundan tashqari, shokoladning afzalliklari va uning tuzilishi haqida ko\'proq bilib oling!',
                'img' => 'about.png',
                'type' => 'eng zo\'r',
                'date' => '2023-04-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
