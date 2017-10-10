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
        $product = new \App\Products([
        	'imagePath' => 'https://vignette.wikia.nocookie.net/harrypotter/images/2/2c/Goblet_of_Fire_Film_Poster.jpg/revision/latest/scale-to-width-down/333?cb=20140817011104',
        	'title' => 'Harry Potter',
        	'description' => 'Supper cool - at least as a child',
        	'price' => 10
        	]);
        $product->save();
        $product = new \App\Products([
        	'imagePath' => 'https://vignette.wikia.nocookie.net/harrypotter/images/2/2c/Goblet_of_Fire_Film_Poster.jpg/revision/latest/scale-to-width-down/333?cb=20140817011104',
        	'title' => 'Harry Potter',
        	'description' => 'Supper cool - at least as a child',
        	'price' => 10
        	]);
        $product->save();
        $product = new \App\Products([
        	'imagePath' => 'https://vignette.wikia.nocookie.net/harrypotter/images/2/2c/Goblet_of_Fire_Film_Poster.jpg/revision/latest/scale-to-width-down/333?cb=20140817011104',
        	'title' => 'Harry Potter',
        	'description' => 'Supper cool - at least as a child',
        	'price' => 10
        	]);
        $product->save();
        $product = new \App\Products([
        	'imagePath' => 'https://vignette.wikia.nocookie.net/harrypotter/images/2/2c/Goblet_of_Fire_Film_Poster.jpg/revision/latest/scale-to-width-down/333?cb=20140817011104',
        	'title' => 'Harry Potter',
        	'description' => 'Supper cool - at least as a child',
        	'price' => 10
        	]);
        $product->save();
    }
}
