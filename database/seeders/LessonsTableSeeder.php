<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('lessons')->insert([
            // Lessons untuk course "Menjadi Influencer Sukses: Panduan Lengkap"
            [
                'course_id' => 1, 
                'title' => 'Mengenal Dunia Influencer',
                'content' => 'Influencer adalah seseorang yang memiliki pengaruh di media sosial. Mereka membangun audiens dengan berbagi konten yang relevan dan menarik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'title' => 'Menentukan Niche dan Personal Branding',
                'content' => 'Tentukan topik utama yang ingin Anda bahas, apakah itu fashion, teknologi, kuliner, atau travel. Personal branding yang kuat akan membantu Anda menonjol.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 1,
                'title' => 'Strategi Meningkatkan Engagement',
                'content' => 'Gunakan teknik storytelling, ajukan pertanyaan ke audiens, dan aktif dalam membalas komentar untuk meningkatkan engagement.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Lessons untuk course "Strategi Konten untuk Influencer Pemula"
            [
                'course_id' => 2,
                'title' => 'Membuat Konten yang Menarik dan Konsisten',
                'content' => 'Pilih format konten yang sesuai dengan platform seperti Instagram Reels, YouTube Shorts, atau TikTok untuk meningkatkan jangkauan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'title' => 'Cara Meningkatkan Followers Secara Organik',
                'content' => 'Posting secara konsisten, gunakan hashtag yang relevan, dan berkolaborasi dengan influencer lain untuk menjangkau lebih banyak orang.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course_id' => 2,
                'title' => 'Monetisasi: Cara Menghasilkan Uang dari Media Sosial',
                'content' => 'Mulailah dengan sponsorship, afiliasi, menjual produk digital, atau menawarkan jasa untuk memonetisasi akun media sosial Anda.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
