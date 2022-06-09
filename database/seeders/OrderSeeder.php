<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Setting;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = Setting::where('lock', 'NO')->first();
        $users = User::where('role', 'USER')->where('status', 'active')->orderBy('id', 'asc')->get();       

        $count = 0;
        foreach($users as $user) {
            // 1. table orders->save()
            // 2. table orders_products->attach()
                        
            do {
                $products = [];
                $subtotal = 0;
                // $count++;
                for($i=1; $i<=9; $i++)
                    $products[rand(1, 49)] = rand(1, 2);

                foreach($products as $product_id => $qty) {
                    $product = Product::find($product_id);
                    // $this->command->info('Price * Quantity: ' . $product->price . ' * ' . $qty . ' = ' . $product->price * $qty);
                    $subtotal += $product->price * $qty;
                }

                if($subtotal == 100) {
                    $count++;
                    $this->command->info($count . '. ' . $user->name . ' --> Ordered');
                }


            } while ($subtotal != 100);

            $order = Order::create([
                        'user_id'       => $user->id,
                        'setting_id'    => $setting->id,
                    ]);

            foreach($products as $product_id => $value)
                $order->products()->attach($product_id, ['quantity' => $value]);

        }

        $this->command->info('');
        $this->command->info('##########################');
        $this->command->info('#######  Completed  ######');
        $this->command->info('##########################');
        $this->command->info('');
    }
}
