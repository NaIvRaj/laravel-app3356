<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Utama
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
        ]);

        // 2. Insert 3 Kategori Event
        $cat1 = \App\Models\Category::create(['name' => 'Seminar IT', 'slug' => 'seminar-it']);
        $cat2 = \App\Models\Category::create(['name' => 'Entertainment', 'slug' => 'entertainment']);
        $cat3 = \App\Models\Category::create(['name' => 'E-Sport', 'slug' => 'e-sport']);

        // 3. Insert 6 Sampel Events
        \App\Models\Event::create([
            'category_id' => $cat2->id,
            'title' => 'Jazz Night 2026',
            'description' => 'Nikmati malam indah dengan alunan jazz.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 150000,
            'stock' => 100,
            'poster_path' => 'assets/concert.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $cat1->id,
            'title' => 'Hackaton Unleash',
            'description' => 'Asah skill coding kamu dan ciptakan inovasi!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 0,
            'stock' => 100,
            'poster_path' => 'assets/hackaton.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $cat1->id,
            'title' => 'AI & Future Tech',
            'description' => 'Jelajahi tren AI masa depan.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 50,
            'poster_path' => 'assets/workshop.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $cat3->id,
            'title' => 'Valorant Campus Cup',
            'description' => 'Turnamen E-Sport terbesar se-DIY.',
            'date' => '2026-06-12 09:00:00',
            'location' => 'Lab E-Sport Amikom',
            'price' => 35000,
            'stock' => 64,
            'poster_path' => 'assets/hackaton.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $cat2->id,
            'title' => 'Stand Up Comedy Fest',
            'description' => 'Malam penuh tawa bersama komika lokal.',
            'date' => '2026-06-20 19:00:00',
            'location' => 'Ruang Citra 1',
            'price' => 45000,
            'stock' => 150,
            'poster_path' => 'assets/concert.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $cat1->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Belajar langsung dari praktisi industri.',
            'date' => '2026-07-05 08:00:00',
            'location' => 'Ruang Kelas 4',
            'price' => 75000,
            'stock' => 40,
            'poster_path' => 'assets/workshop.png',
        ]);
    }
}