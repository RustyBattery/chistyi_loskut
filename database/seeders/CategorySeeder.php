<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->create(['name' => 'Ветошь х/б']);
        Category::query()->create(['name' => 'Техническия салфетка х/б']);
        Category::query()->create(['name' => 'Хлопчатобумажные ткани']);
        Category::query()->create(['name' => 'Вафельное полотно']);
        Category::query()->create(['name' => 'ХПП, неткол, мадаполам, миткаль']);
        Category::query()->create(['name' => 'Марля медицинская']);
        Category::query()->create(['name' => 'Перчатки х/б']);
        Category::query()->create(['name' => 'Рукавицы и Краги']);
        Category::query()->create(['name' => 'Паста для очистки рук, крем для рук']);
        Category::query()->create(['name' => 'Скотч, стрейтч-пленка, пакеты мусорные']);
    }
}
