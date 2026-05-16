<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            ['value' => '50,000 MT', 'label' => 'Lentils Traded'],
            ['value' => '32.9M Litres', 'label' => 'Soybean Oil'],
            ['value' => '60,000 MT', 'label' => 'Sugar Traded'],
            ['value' => '20,000 MT', 'label' => 'Salt Delivered'],
            ['value' => '150,000 MT', 'label' => 'Stone/Month Capacity'],
        ];

        $products = [
    [
        'image' => asset('images/products/sugar.png'),
        'name'  => 'Sugar',
        'desc'  => 'Refined, raw, brown & organic sugar from world-class producers.',
        'color' => 'orange',
        'link'  => route('products.sugar'),
        'tag'   => 'Food Commodity',
    ],
    [
        'image' => asset('images/products/edible-oils.png'),
        'name'  => 'Edible Oils',
        'desc'  => 'Palm, soybean, sunflower, olive & canola oils from leading farms.',
        'color' => 'green',
        'link'  => route('products.oils'),
        'tag'   => 'Food Commodity',
    ],
    [
        'image' => asset('images/products/lentils.png'),
        'name'  => 'Lentils',
        'desc'  => 'Red, brown, green & yellow lentils from Canada, India, Turkey & more.',
        'color' => 'orange',
        'link'  => route('products.lentils'),
        'tag'   => 'Food Commodity',
    ],
    [
        'image' => asset('images/products/salt.png'),
        'name'  => 'Salt',
        'desc'  => 'Table, iodized, sea salt & Himalayan pink salt varieties.',
        'color' => 'green',
        'link'  => route('products.salt'),
        'tag'   => 'Food Commodity',
     ]
    // [
    //     'image' => asset('images/products/construction.jpg'),
    //     'name'  => 'Stone & Materials',
    //     'desc'  => 'GABBRO stone, bitumen, coal & sand for construction projects.',
    //     'color' => 'orange',
    //     'link'  => route('products.construction'),
    //     'tag'   => 'Construction',
    // ],
];

        $whyUs = [
            ['icon' => '🌍', 'title' => 'Global Sourcing', 'desc' => 'Partner network spanning 15+ countries across Asia, Europe, the Americas, and the Middle East.'],
            ['icon' => '📦', 'title' => 'Diverse Product Range', 'desc' => 'From food essentials to construction materials — a one-stop supplier for all your needs.'],
            ['icon' => '🌱', 'title' => 'Sustainability Focus', 'desc' => 'Ethical sourcing and sustainable practices to build a responsible supply chain.'],
            ['icon' => '💰', 'title' => 'Competitive Pricing', 'desc' => 'Direct import relationships pass savings directly to our clients.'],
            ['icon' => '⚙️', 'title' => 'Custom Solutions', 'desc' => 'Tailored supply agreements, flexible volumes, and bespoke delivery arrangements.'],
            ['icon' => '🚛', 'title' => 'Timely Logistics', 'desc' => 'Advanced logistics infrastructure ensuring on-time delivery nationwide and beyond.'],
        ];

        return view('pages.home', compact('stats', 'products', 'whyUs'));
    }
}
