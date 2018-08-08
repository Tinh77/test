<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'name' => 'nhà 1',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 2,
                'name' => 'nhà 2',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://inhome.vn/hm_content/uploads/thiet-ke/hinh-anh-thiet-ke-noi-that-can-ho-chung-cu-50m2-091449-151216.jpg'
            ],
            [
                'id' => 3,
                'name' => 'nhà 3',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg'
            ],
            [
                'id' => 4,
                'name' => 'nhà 4',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'http://cafefcdn.com/thumb_w/650/2017/x1-1490623830619.jpg'
            ],
            [
                'id' => 5,
                'name' => 'nhà 5',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'http://thudoland.com/sites/default/files/2016/noi-that-chung-cu-osaka-complex-ngoc-hoi_1_0.jpg'
            ],
            [
                'id' => 6,
                'name' => 'nhà 6',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'http://nhaquan2.vn/wp-content/uploads/2018/03/nha-mau-can-ho-mini-hoang-anh-thu-duc.jpg'
            ],
            [
                'id' => 7,
                'name' => 'nhà 7',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'http://noithatdangkhoa.vn/upload/img/products/28072017/thumbnail_2_88b7a77996ba6ca40b0e423ed55cf0f3.jpg'
            ],
            [
                'id' => 8,
                'name' => 'nhà 8',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'http://www.tne.vn/uploadfiles/images/can1.jpg'
            ],
            [
                'id' => 9,
                'name' => 'nhà 9',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 10,
                'name' => 'nhà 10',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 11,
                'name' => 'nhà 11',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 12,
                'name' => 'nhà 12',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 13,
                'name' => 'nhà 13',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 14,
                'name' => 'nhà 14',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 15,
                'name' => 'nhà 15',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 16,
                'name' => 'nhà 16',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 17,
                'name' => 'nhà 17',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 18,
                'name' => 'nhà 18',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 19,
                'name' => 'nhà 19',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
            [
                'id' => 20,
                'name' => 'nhà 20',
                'address' => 'Sài Gòn',
                'price' => 200000,
                'general_information' => 'Giáp ranh Thủ Đức',
                'details' => 'Chất lượng sống cao',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],

        ]);
    }
}
