<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	 'imagePath' => 'https://images.pottermore.com/bxd3o8b291gf/3SQ3X2km8wkQIsQWa02yOY/25f258f21bdbe5f552a4419bb775f4f0/HarryPotter_WB_F4_HarryPotterMidshot_Promo_080615_Port.jpg?w=320&h=240&fit=thumb&f=face&q=85',
        	 'title' => 'Harry Potter',
        	 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, voluptas. Porro vitae minus consectetur quidem, consequatur voluptas commodi aspernatur est, pariatur deserunt sequi autem dolore delectus suscipit qui possimus officia.',
        	 'price' => 10
        	]);
        $product->save();

        $product = new \App\Product([
        	 'imagePath' => 'https://images.pottermore.com/bxd3o8b291gf/3SQ3X2km8wkQIsQWa02yOY/25f258f21bdbe5f552a4419bb775f4f0/HarryPotter_WB_F4_HarryPotterMidshot_Promo_080615_Port.jpg?w=320&h=240&fit=thumb&f=face&q=85',
        	 'title' => 'Harry Potter',
        	 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, voluptas. Porro vitae minus consectetur quidem, consequatur voluptas commodi aspernatur est, pariatur deserunt sequi autem dolore delectus suscipit qui possimus officia.',
        	 'price' => 20
        	]);
        $product->save();

        $product = new \App\Product([
        	 'imagePath' => 'https://images.pottermore.com/bxd3o8b291gf/3SQ3X2km8wkQIsQWa02yOY/25f258f21bdbe5f552a4419bb775f4f0/HarryPotter_WB_F4_HarryPotterMidshot_Promo_080615_Port.jpg?w=320&h=240&fit=thumb&f=face&q=85',
        	 'title' => 'Harry Potter',
        	 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, voluptas. Porro vitae minus consectetur quidem, consequatur voluptas commodi aspernatur est, pariatur deserunt sequi autem dolore delectus suscipit qui possimus officia.',
        	 'price' => 30
        	]);
        $product->save();

        $product = new \App\Product([
        	 'imagePath' => 'https://images.pottermore.com/bxd3o8b291gf/3SQ3X2km8wkQIsQWa02yOY/25f258f21bdbe5f552a4419bb775f4f0/HarryPotter_WB_F4_HarryPotterMidshot_Promo_080615_Port.jpg?w=320&h=240&fit=thumb&f=face&q=85',
        	 'title' => 'Harry Potter',
        	 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, voluptas. Porro vitae minus consectetur quidem, consequatur voluptas commodi aspernatur est, pariatur deserunt sequi autem dolore delectus suscipit qui possimus officia.',
        	 'price' => 50
        	]);
        $product->save();

        $product = new \App\Product([
        	 'imagePath' => 'https://images.pottermore.com/bxd3o8b291gf/3SQ3X2km8wkQIsQWa02yOY/25f258f21bdbe5f552a4419bb775f4f0/HarryPotter_WB_F4_HarryPotterMidshot_Promo_080615_Port.jpg?w=320&h=240&fit=thumb&f=face&q=85',
        	 'title' => 'Harry Potter',
        	 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, voluptas. Porro vitae minus consectetur quidem, consequatur voluptas commodi aspernatur est, pariatur deserunt sequi autem dolore delectus suscipit qui possimus officia.',
        	 'price' => 40
        	]);
        $product->save();
    }
}
