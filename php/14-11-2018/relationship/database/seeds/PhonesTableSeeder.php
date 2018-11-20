<?php

use App\Phone;
use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        $users = App\Users::pluck('id');
        foreach ($users as $key => $value) {
            Phone::create([
                'number' => $faker->phoneNumber,
                'user_id' => $value,
            ]);
        }
    }
}
