<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $milestones = [
            ['year' => '2023', 'title' => 'Company Founded', 'desc' => 'TST White House Ltd. incorporated under the Companies Act (Act XVIII of 1994) on 15 November 2023, Dhaka, Bangladesh.'],
            ['year' => '2023', 'title' => 'First Major Trade', 'desc' => 'Successfully managed the trade of 50,000 metric tons of lentils and 20,000 metric tons of salt.'],
            ['year' => '2024', 'title' => 'SKS Joint Venture', 'desc' => 'Entered a landmark Joint Venture with Sena Kalyan Sangstha (SKS) for nationwide commodities distribution.'],
            ['year' => '2024', 'title' => 'Expanded Portfolio', 'desc' => 'Reached 32.9 million litres of soybean oil traded and 60,000 metric tons of sugar managed.'],
            ['year' => '2024', 'title' => '150K MT Stone Capacity', 'desc' => 'Established direct import operations for GABBRO stone from Dubai with 150,000 MT monthly capacity.'],
        ];

        $team = [
            ['name' => 'Leadership Team', 'role' => 'Executive Management', 'icon' => '👔'],
            ['name' => 'Trade Operations', 'role' => 'Commodity Specialists', 'icon' => '📊'],
            ['name' => 'Logistics Division', 'role' => 'Supply Chain Experts', 'icon' => '🚢'],
            ['name' => 'Quality Assurance', 'role' => 'QA & Compliance Team', 'icon' => '✅'],
        ];

        $values = [
            ['icon' => '🎯', 'title' => 'Excellence', 'desc' => 'Setting the highest standards in every transaction and delivery.'],
            ['icon' => '🤝', 'title' => 'Integrity', 'desc' => 'Transparent, honest dealings with every client and partner.'],
            ['icon' => '⚡', 'title' => 'Reliability', 'desc' => 'Consistent quality and on-time supply you can depend on.'],
            ['icon' => '🌱', 'title' => 'Sustainability', 'desc' => 'Responsible sourcing for a better future.'],
        ];

        $commodityStats = [
            ['value' => '50,000 MT', 'label' => 'Lentils Traded', 'icon' => '🌿'],
            ['value' => '32.9M L', 'label' => 'Soybean Oil', 'icon' => '🫙'],
            ['value' => '60,000 MT', 'label' => 'Sugar Managed', 'icon' => '🍬'],
            ['value' => '20,000 MT', 'label' => 'Salt Delivered', 'icon' => '🧂'],
            ['value' => '150K MT/mo', 'label' => 'Stone Capacity', 'icon' => '🪨'],
            ['value' => '15+', 'label' => 'Source Countries', 'icon' => '🌍'],
        ];

        return view('pages.about', compact('milestones', 'team', 'values', 'commodityStats'));
    }
}
