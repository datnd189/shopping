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
        	'imagePath' => 'https://resizing.flixster.com/JbDrMdUuAlGnmzNHijpCB5brWwM=/180x240/v1.bTsxMTE2NjQyMTtqOzE3NTQ0OzEyMDA7ODAwOzEyMDA',
        	'title' => 'Harry Potter',
        	'description' => 'Supper cool - at least as a child',
        	'price' => 10
        	]);
        $product->save();
        $product = new \App\Products([
        	'imagePath' => 'http://media.tinmoi.vn/2013/11/22/nhung-bo-phim-hay-nhat-cua-ly-tieu-long2.png',
        	'title' => 'Harry Potter',
        	'description' => 'Supper cool - at least as a child',
        	'price' => 10
        	]);
        $product->save();
        $product = new \App\Products([
        	'imagePath' => 'http://www.thegioidienanh.vn/stores/news_dataimages/hath/102017/03/14/1949_1.jpg',
        	'title' => 'Harry Potter',
        	'description' => 'Supper cool - at least as a child',
        	'price' => 10
        	]);
        $product->save();
    }
}
