<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'product_name' => 'iphone 14',
                'product_description' => 'Apple iPhone 14 models are identical in design to the iPhone 13 models, featuring flat edges, an aerospace-grade aluminum enclosure, and a glass back that enables wireless charging. The iPhone 14 models come in blue, purple, midnight, starlight, and (PRODUCT)RED.',
                'price' => '75990',
                'image' => '',
                'is_published' => true,
            ],
            [
                'product_name' => 'iphone 13',
                'product_description' => 'Theres an all-glass front and a colorful all-glass back thats housed in a color-matched aluminum frame. Theres a notch on the front display of the iPhone 13 that, houses the TrueDepth Camera, speaker, and microphone. The notch is smaller this year, allowing for more overall display area.',
                'price' => '47890',
                'image' => '',
                'is_published' => true,
            ]
        ];

        foreach ($products as $key => $product) {
            Product::create($product);
        }
    }
}
