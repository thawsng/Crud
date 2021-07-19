<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'customer_id'=>101,
                'name'=>'Đoàn Trọng Thắng',
                'address'=>'Ba Vì'
            ],
            [
                'customer_id'=>102,
                'name'=>'NGuyễn Văn Tiến',
                'address'=>'Hà Nội'
            ],
            [
                'customer_id'=>103,
                'name'=>'Đặng Văn Khoa',
                'address'=>'Hà Nội'
            ],
            [
                'customer_id'=>104,
                'name'=>'Phan Gia Bảo',
                'address'=>'Sài Gòn'
            ],
            [
                'customer_id'=>105,
                'name'=>'Nguyễn Thu Trang',
                'address'=>'Ba Vì'
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
