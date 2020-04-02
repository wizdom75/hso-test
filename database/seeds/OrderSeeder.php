<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();

        $faker = \Faker\Factory::create();
        $accounts = App\Account::all()->pluck('id')->toArray();
        $products = App\Product::all()->pluck('id', 'price')->toArray();

        for ($i = 0; $i < 30; $i++) {

            $account_id = $faker->randomElement($accounts);

            $product_id = $faker->randomElement(array_keys($products));
            $price = $products[$product_id];

            $qty = rand(1, 9);
            $cost = ($price * $qty);

            Order::create([
                'account_id' => $account_id,
                'product_id' => $product_id,
                'quantity' => $qty,
                'cost' => $cost,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
