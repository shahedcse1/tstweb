<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = [
            [
                'icon' => '🍬', 'name' => 'Sugar', 'color' => 'orange',
                'desc' => 'Premium refined, raw, brown & organic sugar from Brazil, Thailand, India, Australia, South Africa & Guatemala.',
                'volume' => '60,000 MT traded', 'link' => route('products.sugar'),
                'tags' => ['ICUMSA 45–1500', 'Refined', 'Organic', 'Raw', 'Brown'],
            ],
            [
                'icon' => '🫙', 'name' => 'Edible Oils', 'color' => 'green',
                'desc' => 'High-quality palm, soybean, sunflower, olive & canola oils imported from Malaysia, Argentina, Ukraine, Italy & Indonesia.',
                'volume' => '32.9M litres traded', 'link' => route('products.oils'),
                'tags' => ['Palm Oil', 'Soybean', 'Sunflower', 'Olive', 'Canola'],
            ],
            [
                'icon' => '🌿', 'name' => 'Lentils', 'color' => 'orange',
                'desc' => 'World\'s finest red, brown, green & yellow lentils from Canada, India, Turkey, Australia & the United States.',
                'volume' => '50,000 MT traded', 'link' => route('products.lentils'),
                'tags' => ['Red', 'Brown', 'Green', 'Yellow'],
            ],
            [
                'icon' => '🧂', 'name' => 'Salt', 'color' => 'green',
                'desc' => 'Premium table, iodized, sea salt & Himalayan pink salt sourced from China, USA, India, Germany, Australia & Pakistan.',
                'volume' => '20,000 MT traded', 'link' => route('products.salt'),
                'tags' => ['Table Salt', 'Iodized', 'Sea Salt', 'Himalayan Pink'],
            ],
            [
                'icon' => '🪨', 'name' => 'Stone (GABBRO)', 'color' => 'orange',
                'desc' => 'High-grade Dubai black stone (GABBRO) directly imported. Capacity to supply up to 150,000 metric tons per month.',
                'volume' => '150,000 MT/month capacity', 'link' => route('products.construction'),
                'tags' => ['GABBRO', 'Black Stone', 'Dubai Import'],
            ],
            [
                'icon' => '⬛', 'name' => 'Coal', 'color' => 'green',
                'desc' => 'Anthracite, Bituminous, Lignite, Peat & Coke for industrial use at any scale with reliable delivery.',
                'volume' => 'Any scale supply', 'link' => route('products.construction'),
                'tags' => ['Anthracite', 'Bituminous', 'Lignite', 'Coke'],
            ],
            [
                'icon' => '🛢️', 'name' => 'Bitumen', 'color' => 'orange',
                'desc' => 'Premium Bitumen imported from Dubai for construction and infrastructure projects of all sizes.',
                'volume' => 'Dubai import', 'link' => route('products.construction'),
                'tags' => ['Dubai Import', 'Road Grade', 'Industrial'],
            ],
            [
                'icon' => '🏗️', 'name' => 'Sand', 'color' => 'green',
                'desc' => 'High-quality local sand supplied consistently for construction projects, ensuring reliability and top-notch material.',
                'volume' => 'Local supply', 'link' => route('products.construction'),
                'tags' => ['Local Sand', 'Construction Grade', 'Fine & Coarse'],
            ],
        ];

        return view('pages.products.index', compact('categories'));
    }

    public function sugar()
    {
        $varieties = [
            ['name' => 'Refined White Sugar', 'grade' => 'ICUMSA 45, 100, 150', 'icon' => '🍚', 'desc' => 'Highly refined, pure, bright white sugar for versatile use in food processing and households.', 'origin' => 'Brazil, Thailand, India'],
            ['name' => 'Brown Sugar', 'grade' => 'ICUMSA 600–1200', 'icon' => '🟤', 'desc' => 'Natural brown sugar with rich molasses content and characteristic darker color.', 'origin' => 'Brazil, Australia'],
            ['name' => 'Raw Sugar', 'grade' => 'ICUMSA 800–1500', 'icon' => '🌾', 'desc' => 'Less refined, retains natural color and molasses content. Popular for specialty food production.', 'origin' => 'South Africa, Guatemala'],
            ['name' => 'Organic Sugar', 'grade' => 'ICUMSA 100–1400', 'icon' => '🌿', 'desc' => 'Organic, unrefined sugar, free from synthetic chemicals and pesticides.', 'origin' => 'India, Australia'],
        ];

        $sources = ['Brazil', 'Thailand', 'India', 'Australia', 'South Africa', 'Guatemala'];

        $qa = [
            'ICUMSA Analysis — precise purity measurement',
            'Polarization Testing — sucrose content verification',
            'Microbial Testing — food-safety compliance',
            'Traceability Systems — farm-to-port tracking',
            'Vendor Audits — supplier quality checks',
        ];

        return view('pages.products.sugar', compact('varieties', 'sources', 'qa'));
    }

    public function oils()
    {
        $varieties = [
            ['name' => 'Palm Oil', 'code' => 'PO1', 'icon' => '🌴', 'desc' => 'Versatile oil widely used in cooking, baking, and processed foods. Rich in saturated fats.', 'origin' => 'Malaysia, Indonesia'],
            ['name' => 'Soybean Oil', 'code' => 'SO2', 'icon' => '🫘', 'desc' => 'Popular for frying and baking, rich in protein and polyunsaturated fatty acids.', 'origin' => 'Argentina, Ukraine'],
            ['name' => 'Sunflower Oil', 'code' => 'SF3', 'icon' => '🌻', 'desc' => 'Light and mild, ideal for frying, baking, and salad dressings. High in Vitamin E.', 'origin' => 'Ukraine, Argentina'],
            ['name' => 'Olive Oil', 'code' => 'OV4', 'icon' => '🫒', 'desc' => 'Extra virgin and refined grades. Rich flavor, health benefits, used in cooking and finishing.', 'origin' => 'Italy, Greece'],
            ['name' => 'Canola Oil', 'code' => 'CA5', 'icon' => '🌸', 'desc' => 'Low in saturated fat, high in omega-3 fatty acids. Excellent for everyday cooking.', 'origin' => 'Canada, Australia'],
        ];

        $sources = ['Malaysia', 'Argentina', 'Ukraine', 'Italy', 'Indonesia'];

        return view('pages.products.oils', compact('varieties', 'sources'));
    }

    public function lentils()
    {
        $varieties = [
            ['name' => 'Red Lentils', 'code' => 'RL-20', 'icon' => '🔴', 'desc' => 'Premium red lentils from India and Turkey. Ideal for versatile use in global cuisines, soups, and dals.', 'origin' => 'India, Turkey'],
            ['name' => 'Brown Lentils', 'code' => 'BL-10', 'icon' => '🟫', 'desc' => 'Top-quality brown lentils from Canada and the USA. Perfect for stews, casseroles, and salads.', 'origin' => 'Canada, USA'],
            ['name' => 'Green Lentils', 'code' => 'GL-25', 'icon' => '🟢', 'desc' => 'Peppery flavor and firm texture from France and Canada. Perfect for salads and gourmet dishes.', 'origin' => 'France, Canada'],
            ['name' => 'Yellow Lentils', 'code' => 'YSL-15', 'icon' => '🟡', 'desc' => 'Excellent for traditional South Asian dishes like dals. Sourced from India and Myanmar.', 'origin' => 'India, Myanmar'],
        ];

        $sources = ['Canada', 'India', 'Turkey', 'Australia', 'United States', 'France', 'Myanmar'];

        $supplyChain = [
            ['step' => '01', 'title' => 'Strategic Sourcing', 'desc' => 'Direct partnerships with farms across key lentil-producing countries.'],
            ['step' => '02', 'title' => 'Quality Control', 'desc' => 'Rigorous inspection at source and upon arrival.'],
            ['step' => '03', 'title' => 'Advanced Logistics', 'desc' => 'Efficient shipping routes ensuring timely delivery.'],
            ['step' => '04', 'title' => 'Final Delivery', 'desc' => 'Door-to-door delivery maintaining cold chain integrity.'],
        ];

        return view('pages.products.lentils', compact('varieties', 'sources', 'supplyChain'));
    }

    public function salt()
    {
        $varieties = [
            ['name' => 'Refined Table Salt', 'grade' => 'NaCl ≥99.9%', 'icon' => '🧂', 'desc' => 'Highly purified, finely granulated salt for households and food processing.', 'origin' => 'China, USA'],
            ['name' => 'Iodized Salt', 'grade' => 'Fortified', 'icon' => '⚗️', 'desc' => 'Table salt enriched with iodine, essential for preventing iodine deficiency.', 'origin' => 'India, Pakistan'],
            ['name' => 'Sea Salt', 'grade' => 'Natural', 'icon' => '🌊', 'desc' => 'Harvested through evaporation of seawater, containing natural trace minerals.', 'origin' => 'Australia, Germany'],
            ['name' => 'Himalayan Pink Salt', 'grade' => 'Special R50', 'icon' => '🩷', 'desc' => 'Mined from ancient salt deposits, known for distinctive pink color and rich mineral content.', 'origin' => 'Pakistan'],
        ];

        $benefits = [
            'High Purity — NaCl content up to 99.9%',
            'Versatile Applications — food, industrial & specialty uses',
            'Rich in Minerals — natural trace elements preserved',
            'Iodine Enrichment — health-grade fortification',
            'Ethically Sourced — responsible mining practices',
            'Consistent Quality — batch-tested every shipment',
        ];

        $sources = ['China', 'USA', 'India', 'Germany', 'Australia', 'Pakistan'];

        return view('pages.products.salt', compact('varieties', 'benefits', 'sources'));
    }

    public function construction()
    {
        $materials = [
            [
                'icon' => '🪨', 'name' => 'Dubai Black Stone (GABBRO)',
                'desc' => 'TST White House is a direct importer of high-grade GABBRO stone from Dubai. We have the capacity to supply up to 150,000 metric tons per month, making us one of Bangladesh\'s leading stone suppliers.',
                'specs' => ['Grade: High-Grade GABBRO', 'Capacity: 150,000 MT/month', 'Origin: Dubai, UAE', 'Application: Construction, Roadwork, Infrastructure'],
                'badge' => '150,000 MT/mo',
            ],
            [
                'icon' => '⬛', 'name' => 'Coal',
                'desc' => 'TST White House Ltd. is a trusted coal importer offering diverse coal types to meet industrial demands of any scale with top-quality sourcing and reliable delivery.',
                'specs' => ['Types: Anthracite, Bituminous, Lignite, Peat, Coke', 'Grade: Industrial Grade', 'Origin: Multiple countries', 'Application: Energy, Manufacturing'],
                'badge' => 'All Types',
            ],
            [
                'icon' => '🛢️', 'name' => 'Bitumen',
                'desc' => 'TST specializes in supplying premium Bitumen imported directly from Dubai. We are dedicated to providing top-quality Bitumen for construction and infrastructure projects.',
                'specs' => ['Grade: Premium Road Grade', 'Origin: Dubai, UAE', 'Application: Road Construction, Waterproofing', 'Standards: International specifications'],
                'badge' => 'Dubai Import',
            ],
            [
                'icon' => '🏗️', 'name' => 'Local Sand',
                'desc' => 'TST is your trusted provider of high-quality local sand, committed to supplying superior sand for construction projects ensuring consistency and reliability.',
                'specs' => ['Types: Fine Sand, Coarse Sand', 'Origin: Local Bangladesh', 'Application: Construction, Plastering, Concrete', 'Availability: Continuous supply'],
                'badge' => 'Local Supply',
            ],
            [
                'icon' => '🪵', 'name' => 'Indian Pakur Stone',
                'desc' => 'Premium quality Pakur stone imported from India, widely used in construction and infrastructure projects across Bangladesh.',
                'specs' => ['Origin: Pakur, Jharkhand, India', 'Grade: Construction Grade', 'Application: Foundation, RCC work', 'Size: Multiple gradations available'],
                'badge' => 'India Import',
            ],
            [
                'icon' => '🏔️', 'name' => 'Indian Lime Stone',
                'desc' => 'High-quality limestone imported from India for use in construction, cement production, and industrial applications.',
                'specs' => ['Origin: India', 'Grade: Industrial & Construction Grade', 'Application: Cement, Construction, Industrial', 'Purity: High calcium content'],
                'badge' => 'India Import',
            ],
        ];

        return view('pages.products.construction', compact('materials'));
    }
}
