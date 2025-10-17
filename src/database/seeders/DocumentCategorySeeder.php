<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DocumentCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'ariza_doc',
                'slug' => Str::slug('Arizalar'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'shartnoma_doc',
                'slug' => Str::slug('Shartnomalar'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'shaxsiy_doc', 
                'slug' => Str::slug('Shaxsiy hujjatlar'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('document_categories')->insert($categories);
    }
}
