<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



class DocumentCategoryFactory extends Factory
{
   public  $ariza = [
    'arizachi' => [
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
];
    
    public function definition(): array
    {
        return [
        ];
    }
}
