<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function index()
    {
        $protocols = [
            ['icon' => '🔬', 'title' => 'ICUMSA Analysis', 'desc' => 'The International Commission for Uniform Methods of Sugar Analysis (ICUMSA) method precisely measures sugar purity ensuring consistent standards across all batches.'],
            ['icon' => '💡', 'title' => 'Polarization Testing', 'desc' => 'Verifying sucrose content through optical polarimetry to guarantee product quality and compliance with international market standards.'],
            ['icon' => '🧫', 'title' => 'Microbial Testing', 'desc' => 'Comprehensive microbiological safety checks at certified laboratories ensuring all food commodities meet health and safety standards.'],
            ['icon' => '📍', 'title' => 'Traceability Systems', 'desc' => 'End-to-end tracking from farm/mine to delivery, maintaining full supply chain transparency and accountability.'],
            ['icon' => '🏭', 'title' => 'Vendor Audits', 'desc' => 'Regular on-site audits of all supplier facilities to ensure compliance with our quality standards and ethical sourcing policies.'],
            ['icon' => '📋', 'title' => 'Documentation Control', 'desc' => 'Complete documentation management including certificates of analysis, phytosanitary certificates, and customs clearance records.'],
        ];

        $certifications = [
            ['name' => 'Certificate of Incorporation', 'body' => 'Registrar of Joint Stock Companies, Bangladesh', 'no' => 'C-192161/2023'],
            ['name' => 'Trade License', 'body' => 'Dhaka North City Corporation', 'no' => 'TRAD/DNCC/029301/2023'],
            ['name' => 'Taxpayer Identification Number', 'body' => 'National Board of Revenue, Bangladesh', 'no' => '716874504619'],
            ['name' => 'NCC Bank Financial Certification', 'body' => 'National Credit and Commerce Bank PLC', 'no' => 'NCCB/BARI/CR/2024/543'],
            ['name' => 'SKS Joint Venture Certificate', 'body' => 'Sena Kalyan Sangstha', 'no' => 'Certificate of Acknowledgement 2024'],
        ];

        $standards = [
            ['metric' => '99.9%', 'label' => 'Purity Standard', 'sub' => 'Refined Table Salt'],
            ['metric' => 'ICUMSA 45', 'label' => 'Highest Sugar Grade', 'sub' => 'White Refined Sugar'],
            ['metric' => '150K MT', 'label' => 'Monthly Stone Capacity', 'sub' => 'GABBRO Dubai'],
            ['metric' => '15+', 'label' => 'Source Countries', 'sub' => 'Global Network'],
        ];

        return view('pages.quality', compact('protocols', 'certifications', 'standards'));
    }
}
