<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $document=[
            [
                'category_id' => 1, // Shaxsiy hujjatlar
                'title' => 'Doimiy yashash joyi bo‘yicha ro‘yxatga olish to‘g‘risida iltimosnoma',
                'slug' => Str::slug('Doimiy yashash joyi bo‘yicha ro‘yxatga olish to‘g‘risida iltimosnoma'),
                'description' => 'Doimiy yashash joyi bo‘yicha ro‘yxatga olish uchun iltimosnoma',
                'template_path' => 'document_template.ariza_doc.doimiy_yashash_manzil_iltimosnoma', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2, // Shaxsiy hujjatlar
                'title' => 'Haqdan voz kechish va qarzni oʻtkazish haqida shartnoma',
                'slug' => Str::slug('Haqdan voz kechish va qarzni oʻtkazish haqida shartnoma'),
                'description' => 'Haqdan voz kechish va qarzni oʻtkazish haqida shartnoma',
                'template_path' => 'document_template.shartnoma_doc.haqdan_voz_kechish_qarzni_utqazish.blade.php', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Shaxsiy hujjatlar
                'title' => 'Mehnat intizomining buzilishi sababli aybdor xodimga nisbatan intizomiy jazo qoʻllash toʻgʻrisida bildirishnoma',
                'slug' => Str::slug('Mehnat intizomining buzilishi sababli aybdor xodimga nisbatan intizomiy jazo qoʻllash toʻgʻrisida bildirishnoma'),
                'description' => 'Mehnat intizomining buzilishi sababli aybdor xodimga nisbatan intizomiy jazo qoʻllash toʻgʻrisida bildirishnoma',
                'template_path' => 'document_template.shaxsiy_doc.aybdor_xodimga_jazo_qullash_bildirgi', 
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];
        DB::table('documents')->insert($document);
    }
}
