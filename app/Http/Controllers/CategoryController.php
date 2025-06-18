<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category)
    {
        // Map category slugs to their display names and icons
        $categoryInfo = [
            'all' => [
                'name' => 'Tất cả',
                'icon' => 'tatCa.svg'
            ],
            'food' => [
                'name' => 'Ẩm thực',
                'icon' => 'coffee.svg'
            ],
            'travel' => [
                'name' => 'Du lịch',
                'icon' => 'amThuc.svg'
            ],
            'entertainment' => [
                'name' => 'Giải trí',
                'icon' => 'giaiTri.svg'
            ],
            'health' => [
                'name' => 'Sức khỏe',
                'icon' => 'sucKhoe.svg'
            ]
        ];

        // Check if category exists
        if (!isset($categoryInfo[$category])) {
            abort(404);
        }

        // Sample products data - in a real application, this would come from a database
        $products = [
            [
                'image' => '/image/test/starbuck.svg',
                'brand_logo' => '/image/test/starbuck-icon.svg',
                'brand_name' => 'Starbucks',
                'title' => 'Mua KFC với giá chỉ từ 19.000đ',
                'price' => '20.000đ'
            ],
            [
                'image' => '/image/test/starbuck.svg',
                'brand_logo' => '/image/test/starbuck-icon.svg',
                'brand_name' => 'Starbucks',
                'title' => 'Mua KFC với giá chỉ từ 19.000đ',
                'price' => '20.000đ'
            ],
            [
                'image' => '/image/test/starbuck.svg',
                'brand_logo' => '/image/test/starbuck-icon.svg',
                'brand_name' => 'Starbucks',
                'title' => 'Mua KFC với giá chỉ từ 19.000đ',
                'price' => '20.000đ'
            ]
        ];

        return view('category', [
            'categoryName' => $categoryInfo[$category]['name'],
            'categoryIcon' => $categoryInfo[$category]['icon'],
            'products' => $products
        ]);
    }
} 