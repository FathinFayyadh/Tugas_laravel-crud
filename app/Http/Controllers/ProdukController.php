<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function product() {
        $products=[
            [
            'menu'=> 'Black Coffee',
            'Price'=> 25000,
            'description'=>'Jenis minuman kopi yang pertama adalah black coffee atau kopi hitam. Siapa sih yang tidak kenal dengan jenis minuman kopi yang satu ini? Kopi hitam terutama sangat disukai oleh orang-orang dewasa. ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy90069lCUUU_dTAcNd-tdw2lW-xasQ4nOm6QYgbZnuw&s'
        ],
        [
            'menu'=> 'Latte',
            'Price'=> 28000,
            'description'=>'Jenis minuman kopi yang kedua adalah latte. Sebagai minuman kopi paling populer di dunia, latte terdiri dari espresso dan steamed milk dengan sedikit busa di atasnya.',
            'image'=>'https://images.unsplash.com/photo-1594261956806-3ad03785c9b4?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y29mZmUlMjBsYXR0ZXxlbnwwfHwwfHx8MA%3D%3D',
        ],
        [
            'menu'=> 'Cappuccino',
            'Price'=>30000,
            'description'=>'Jenis minuman kopi yang ketiga adalah cappuccino. Cappuccino adalah latte yang dibuat dengan lebih banyak busa (foam) daripada steamed milk, seringkali ditambah dengan taburan bubuk kakao atau kayu manis di atasnya.',
            'image'=>'https://plus.unsplash.com/premium_photo-1668472272033-58b4b738b452?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGNhcHB1Y2Npbm98ZW58MHx8MHx8fDA%3D',

        ],
        [
            'menu'=> ' Americano',
            'Price'=>20000,
            'description'=>' Jenis minuman kopi yang keempat adalah americano. Dengan rasa yang mirip dengan kopi hitam, americano terdiri dari espresso shot yang diencerkan dengan air panas.',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1qzSsIM4CzdgehcPTLYY3jSux8PZlvWyxXw&s',

        ]
        ];
        return view('hero', compact('products'));
    }
}
