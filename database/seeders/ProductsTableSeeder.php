<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'order_id'=>827,
                'created_at'=> Carbon::now()->addDays(-4),
                'customer_id'=>103
            ],
            [
                'order_id'=>409,
                'created_at'=> Carbon::now()->addDays(-2),
                'customer_id'=>104
            ],
            [
                'order_id'=>305,
                'created_at'=> Carbon::now()->addDays(-1),
                'customer_id'=>103
            ],
            [
                'order_id'=>984,
                'created_at'=> Carbon::now()->addDays(-6),
                'customer_id'=>101
            ],
            [
                'order_id'=>309,
                'created_at'=> Carbon::now()->addDays(-10),
                'customer_id'=>105
            ],
            [
                'order_id'=>847,
                'created_at'=> Carbon::now()->addDays(-2),
                'customer_id'=>102
            ],
            [
                'order_id'=>498,
                'created_at'=> Carbon::now()->addDays(-25),
                'customer_id'=>103
            ],
            [
                'order_id'=>509,
                'created_at'=> Carbon::now()->addDays(-30),
                'customer_id'=>104
            ],
            [
                'order_id'=>998,
                'created_at'=> Carbon::now()->addDays(-2),
                'customer_id'=>103
            ],
            [
                'order_id'=>983,
                'created_at'=> Carbon::now()->addDays(-5),
                'customer_id'=>105
            ]

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
