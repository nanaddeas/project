<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealPlanninggSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meal_planninggs')->insert([
            'menu' => 'Salad',
            'bahan' => 'Daun selada (cuci bersih, iris atau sobek kasar), 6-8 buah tomat kecil, buah ciplukan secukupnya, 2 butir telur omega, rebus lalu belah dua, minyak zaitun secukupnya, ½ buah lemon segar, parut kulitnya, belah jadi dua (peras ambil airnya), dressing salad kwepie campur dengan perasan lemon, buah blueberry',
            'resep' => 'Masukkan daun selada, telur rebus ke wadah, tambahkan minyak zaitun dan perasan air lemon, guyur dengan dressing salad, aduk semua bahan',
        ]);
    }
}
