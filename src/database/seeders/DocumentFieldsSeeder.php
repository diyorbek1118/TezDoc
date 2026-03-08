<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentFieldsSeeder extends Seeder
{
    public function run(): void
    {
        $document_fields = [
            [
                'document_id' =>1,
                'ariza_data' => json_encode([
                    $ariza = [
        'manzil' => [
            'viloyat' => 'Toshkent shahri',
            'tuman' => 'Yunusobod tumani',
            'kocha' => 'Amir Temur ko\'chasi',
            'uy_raqam' => '45'
        ],
        'fio' => 'Karimov Kamol Kamalovich',
        'uy_joy_manzil' => [
            'viloyat' => 'Toshkent shahri',
            'tuman' => 'Yunusobod tumani',
            'kocha' => 'Amir Temur ko\'chasi',
            'uy_raqam' => '45',
            'xonadon_raqam' => '12'
        ]
    ],
    
    'ariza_rekvizit' => [
        'tashkilot' => 'Yunusobod tumani hokimiyati',
        'sana' => '20.10.2025'
    ],
    
    'mazmun' => [
        'umumiy_maydon' => '75.5',
        'royxatga_olinuvchi_fio' => 'Karimova Dilnoza Kamalovna',
        'mulkdor_fio' => 'Karimov Kamol Kamalovich'
    ],
    
    'oila_azolari' => [
        [
            'qarindoshlik' => 'Rafiqasi',
            'fio' => 'Karimova Dilnoza Kamalovna',
            'tugilgan_yil' => '1990',
            'tugilgan_joy' => 'Toshkent sh.'
        ],
        [
            'qarindoshlik' => 'O\'g\'li',
            'fio' => 'Karimov Javohir Kamalovich',
            'tugilgan_yil' => '2015',
            'tugilgan_joy' => 'Toshkent sh.'
        ]
    ]
                ], JSON_UNESCAPED_UNICODE),
                'submitted_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('document_fields')->insert($document_fields);
    }
}


