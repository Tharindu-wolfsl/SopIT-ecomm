<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'I phone 14s',
                'price'=>'699',
                'category'=>'mobile',
                'description'=>'This is latest iphone market have',
                'gallery'=>'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-14-pro-finish-select-202209-6-7inch-deeppurple?wid=5120&hei=2880&fmt=jpeg&qlt=90&.v=1660754254057'
            ],[
                'name'=>'Samsung note 22',
                'price'=>'799',
                'category'=>'mobile',
                'description'=>'This is latest samsung mobile market have',
                'gallery'=>'https://api.priceinkenya.com/media/115830/galaxys22ultrac.jpeg'
            ],
            [
                'name'=>'MSI gaming monitor',
                'price'=>'899',
                'category'=>'monitor',
                'description'=>'This is latest monitor market have',
                'gallery'=>'https://m.media-amazon.com/images/I/81GXmtm3QkL._AC_SL1500_.jpg'
            ],
            [
                'name'=>'NIVIDIA RTX 3080',
                'price'=>'699',
                'category'=>'Graphic card',
                'description'=>'This is latest graphic card market have',
                'gallery'=>'https://www.tradeinn.com/f/13880/138802072_9/asus-rog-strix-nvidia-geforce-rtx-3080-oc-12gb-gddr6-graphic-card.jpg'
            ],
            [
                'name'=>'Lenovo legion laptop',
                'price'=>'799',
                'category'=>'laptop',
                'description'=>'This is latest laptop market have',
                'gallery'=>'https://static.lenovo.com/ww/campaigns/2022/legion-brand/lenovo-campaign-legion-brand-agnostic-feature-7-legion-ultimate-support-mobile.jpg'
            ],
            [
                'name'=>'Tera VR box',
                'price'=>'399',
                'category'=>'VR',
                'description'=>'This is latest VR box market have',
                'gallery'=>'https://5.imimg.com/data5/CU/FS/MY-37182282/virtual-reality-box-vr-500x500.jpg'
            ]]);
    }
}
