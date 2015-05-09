<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 02/05/2015
 * Time: 22:11
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder{
    public function run()
    {
        DB::table('users')->truncate();

        $faker = Faker::create();

        foreach(range(1,10) as $i):

            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make($faker->word)
            ]);

        endforeach;


    }
}