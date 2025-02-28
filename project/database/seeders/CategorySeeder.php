<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Fiksi', 'description' => 'Buku dengan cerita imajinatif atau rekaan.'],
            ['name' => 'Non-Fiksi', 'description' => 'Buku berdasarkan fakta dan kejadian nyata.'],
            ['name' => 'Biografi', 'description' => 'Buku yang menceritakan kisah hidup seseorang.'],
            ['name' => 'Sains', 'description' => 'Buku tentang ilmu pengetahuan dan teknologi.'],
            ['name' => 'Sejarah', 'description' => 'Buku yang membahas peristiwa sejarah dan peradaban manusia.'],
            ['name' => 'Agama', 'description' => 'Buku mengenai ajaran dan nilai-nilai keagamaan.'],
            ['name' => 'Bisnis', 'description' => 'Buku tentang dunia bisnis, ekonomi, dan keuangan.'],
            ['name' => 'Psikologi', 'description' => 'Buku yang membahas tentang pikiran dan perilaku manusia.'],
            ['name' => 'Teknologi', 'description' => 'Buku yang membahas inovasi dan perkembangan teknologi.'],
            ['name' => 'Sastra', 'description' => 'Buku mengenai karya sastra, puisi, dan novel klasik.'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
