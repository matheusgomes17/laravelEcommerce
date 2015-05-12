<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 02/05/2015
 * Time: 22:11
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder{
    public function run()
    {
        DB::table('products')->truncate();

        $faker = Faker::create();

        foreach(range(1,40) as $i):

            Product::create([
                'name' => $faker->word(),
                'description' => $faker->sentence(),
                'price' => $faker->randomNumber(2),
                'category_id' => $faker->numberBetween(1,15)
            ]);

        endforeach;


    }
}