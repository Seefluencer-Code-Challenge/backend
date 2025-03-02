<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            [
                'user_id' => 1, // Sesuaikan dengan ID user yang ada
                'title' => 'Menjadi Influencer Sukses: Panduan Lengkap',
                'description' => 'Kursus ini membahas cara membangun personal branding, meningkatkan engagement, dan menghasilkan uang dari media sosial.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'title' => 'Strategi Konten untuk Influencer Pemula',
                'description' => 'Pelajari cara membuat konten yang menarik dan konsisten untuk membangun audiens yang loyal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
