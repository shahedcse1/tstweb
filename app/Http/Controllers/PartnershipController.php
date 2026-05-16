<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    public function index()
    {
        $jvDetails = [
            'partner' => 'Sena Kalyan Sangstha (SKS)',
            'year' => '2024',
            'cert_no' => 'Certificate of Acknowledgement',
            'address' => 'SKS Tower (10th Floor), 7, VIP Road, Mohakhali, Dhaka-1206, Bangladesh',
            'focus' => 'Nationwide distribution and importing essential commodities',
        ];

        $benefits = [
            ['icon' => '🏛️', 'title' => 'Institutional Strength', 'desc' => 'SKS brings decades of institutional credibility, government relationships, and a nationwide distribution network.'],
            ['icon' => '📊', 'title' => 'Trade Expertise', 'desc' => 'TST White House contributes deep commodity trading expertise, global supplier relationships, and logistics know-how.'],
            ['icon' => '🚀', 'title' => 'Market Expansion', 'desc' => 'The JV enables rapid expansion into new market segments and geographic regions across Bangladesh.'],
            ['icon' => '⚖️', 'title' => 'Regulatory Compliance', 'desc' => 'Combined resources ensure full compliance with Bangladesh Bank, NBR, and international trade regulations.'],
            ['icon' => '💼', 'title' => 'Financial Capacity', 'desc' => 'NCC Bank credit facilities up to BDT 500 Crore enabling large-scale supply and work orders.'],
            ['icon' => '🌏', 'title' => 'Global Integration', 'desc' => 'Seamless integration of international commodity markets with local Bangladesh distribution needs.'],
        ];

        $importPartners = [
            ['region' => 'South Asia', 'countries' => ['India', 'Pakistan'], 'products' => 'Salt, Stone, Lentils'],
            ['region' => 'Southeast Asia', 'countries' => ['Malaysia', 'Indonesia'], 'products' => 'Palm Oil, Edible Oils'],
            ['region' => 'South America', 'countries' => ['Brazil', 'Argentina'], 'products' => 'Sugar, Soybean Oil'],
            ['region' => 'Middle East', 'countries' => ['UAE (Dubai)'], 'products' => 'GABBRO Stone, Bitumen'],
            ['region' => 'East Asia', 'countries' => ['China'], 'products' => 'Salt, Industrial Materials'],
            ['region' => 'North America', 'countries' => ['Canada', 'USA'], 'products' => 'Lentils, Canola Oil'],
            ['region' => 'Europe', 'countries' => ['Ukraine', 'Italy', 'France', 'Germany'], 'products' => 'Sunflower Oil, Olive Oil, Green Lentils'],
            ['region' => 'Oceania', 'countries' => ['Australia'], 'products' => 'Sugar, Lentils, Salt'],
        ];

        return view('pages.partnership', compact('jvDetails', 'benefits', 'importPartners'));
    }
}
