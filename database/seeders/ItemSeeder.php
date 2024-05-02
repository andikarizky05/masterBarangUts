<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Factory;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'V-001',
            'name' => 'Vanili',
            'price' => 6000000,
            'desc' => $faker->text(200),
            'stock' => 900
        ]);

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'K-001',
            'name' => 'Kopi',
            'price' => 240000,
            'desc' => $faker->text(200),
            'stock' => 198
        ]);

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'C-001',
            'name' => 'Cengkeh',
            'price' => 125000,
            'desc' => $faker->text(200),
            'stock' => 88
        ]);

        Item::query()->create([
            'unit_id' => 3,
            'code' => 'C2-001',
            'name' => 'Cinnamon',
            'price' => 123870000,
            'desc' => $faker->text(200),
            'stock' => 25
        ]);

        Item::query()->create([
            'unit_id' => 3,
            'code' => 'K2-001',
            'name' => 'Kakao',
            'price' => 171558000,
            'desc' => $faker->text(200),
            'stock' => 90
        ]);
    }
}
