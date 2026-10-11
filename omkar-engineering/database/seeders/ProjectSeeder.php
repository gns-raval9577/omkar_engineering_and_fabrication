<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Seed authentic industrial engineering projects for Omkar Engineering & Fabrication.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Industrial PEB Warehouse & Factory Shed',
                'slug' => 'industrial-peb-warehouse-factory-shed',
                'location' => 'Changodar Industrial Estate, Ahmedabad',
                'category' => 'Industrial Shed & PEB',
                'client' => 'Logistics & Manufacturing Hub',
                'project_date' => '12 October, 2026',
                'icon' => 'norc-factory',
                'image' => 'template/img/projects/project-peb-shed.jpg',
                'sort_description' => 'Design, fabrication, and on-site erection of a 65,000 sq. ft. Pre-Engineered Building (PEB) clear-span industrial factory shed with heavy crane runway girders.',
                'description' => '<p>Comprehensive end-to-end turnkey fabrication and structural erection of a 65,000 sq. ft. Pre-Engineered Building (PEB) warehouse facility in Changodar Industrial Estate. Engineered to withstand heavy industrial wind loads and seismic factors, the structure features high-strength built-up rafters, clear-span portal framing, and 20-ton overhead crane runway beam integration.</p><p>Fabricated using prime certified IS 2062 Grade E350 steel plates, high-tensile cold-formed Z/C purlins, standing-seam color-coated Galvalume roofing sheets, and continuous ridge turbo ventilators for optimal natural ventilation and workplace illumination.</p>',
                'included_items' => [
                    '65,000 Sq. Ft. Clear-Span PEB Steel Portal Frame System',
                    'Integrated 20-Ton Overhead Crane Runway Beam Girders',
                    'Hot-Dip Galvanized High-Tensile C & Z Purlin Sub-Framing',
                    'Galvalume Insulated Roofing & Wall Cladding with Polycarbonate Skylights',
                    'Complete Turnkey Foundation Anchor Bolt Alignment & Site Erection',
                ],
                'slider_images' => [
                    'template/img/projects/project-peb-shed.jpg',
                    'template/img/projects-banner-engineering.jpg',
                    'template/img/projects/project-crane-girder.jpg',
                ],
                'gallery_images' => [
                    'template/img/projects/project-peb-shed.jpg',
                    'template/img/projects/project-crane-girder.jpg',
                ],
                'website_url' => null,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Stainless Steel Storage Tanks & Pressure Vessels',
                'slug' => 'stainless-steel-chemical-storage-tanks',
                'location' => 'Dahej PCPIR Chemical Zone, Gujarat',
                'category' => 'Storage Tanks & Equipment',
                'client' => 'Specialty Chemical & Pharma Corp',
                'project_date' => '28 September, 2026',
                'icon' => 'norc-cogwheel',
                'image' => 'template/img/projects/project-chemical-tank.jpg',
                'sort_description' => 'Custom manufacturing of 50 KL Stainless Steel (SS 316L) industrial chemical storage tanks with dished ends, internal heating coils, and certified argon-purged TIG welding.',
                'description' => '<p>Engineered and manufactured multiple 50 KL high-grade Stainless Steel (SS 316L / SS 304) liquid chemical storage vessels and jacketed mixing reactors for an agrochemical manufacturing facility in Dahej. Built in accordance with ASME Section VIII Div. 1 standards for corrosive atmospheric duty.</p><p>Fabrication involved precision CNC plate rolling, automatic submerged arc welding (SAW), 100% radiographic weld testing, dye penetrant inspection (DPI), and comprehensive internal electro-polishing with pickling and passivation to prevent chemical corrosion.</p>',
                'included_items' => [
                    '50 KL Capacity SS 316L Heavy Chemical Storage Tanks',
                    'Torispherical & Semi-Ellipsoidal Dished Head Forming',
                    '100% Radiographic & Ultrasonic Butt-Weld Non-Destructive Testing (NDT)',
                    'Internal Pickling, Passivation & High-Gloss Mirror Finish',
                    'Certified Hydrostatic Pressure Testing up to 16 Bar Pressure',
                ],
                'slider_images' => [
                    'template/img/projects/project-chemical-tank.jpg',
                    'template/img/projects/project-piping-manifold.jpg',
                    'template/img/projects-banner-engineering.jpg',
                ],
                'gallery_images' => [
                    'template/img/projects/project-chemical-tank.jpg',
                    'template/img/projects/project-piping-manifold.jpg',
                ],
                'website_url' => null,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Overhead Gantry Crane Runway Girders & Monorail',
                'slug' => 'overhead-gantry-crane-runway-girders',
                'location' => 'Phase-1, Vatva GIDC, Ahmedabad',
                'category' => 'Heavy Machinery & Crane Structures',
                'client' => 'Heavy Machinery & Foundry Works',
                'project_date' => '15 August, 2026',
                'icon' => 'norc-construction-sign',
                'image' => 'template/img/projects/project-crane-girder.jpg',
                'sort_description' => 'Heavy structural fabrication of 40-ton capacity overhead crane box girders, runway beams, and surge trusses with high-precision rail alignment.',
                'description' => '<p>Custom structural fabrication and precision machining of heavy double-girder overhead crane runway beams and support columns designed for a 40-ton lifting capacity industrial foundry. Spanning over 120 meters of workshop bay length in Vatva GIDC.</p><p>Featuring heavy built-up box-girder profiles manufactured with internal stiffeners, continuous automated submerged arc welding, post-weld stress relieving, and precision laser alignment of the crane rails to ensure vibration-free smooth crane travel.</p>',
                'included_items' => [
                    '40-Ton Heavy Duty Double-Box Crane Girder Fabrication',
                    '120-Meter Continuous Heavy Structural Runway Beam Assembly',
                    'High-Tensile Grade 10.9 Flange Connection Fastening',
                    'Submerged Arc Welded Longitudinal Seams with Full Penetration',
                    'Proof Load Deflection Testing & Vibration Damping Handover',
                ],
                'slider_images' => [
                    'template/img/projects/project-crane-girder.jpg',
                    'template/img/projects/project-peb-shed.jpg',
                    'template/img/projects-banner-engineering.jpg',
                ],
                'gallery_images' => [
                    'template/img/projects/project-crane-girder.jpg',
                    'template/img/projects/project-peb-shed.jpg',
                ],
                'website_url' => null,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Industrial High-Pressure Utility Piping & Manifolds',
                'slug' => 'industrial-high-pressure-piping-manifolds',
                'location' => 'Jhagadia GIDC, Bharuch',
                'category' => 'Industrial Piping & Utilities',
                'client' => 'Industrial Processing & Textile Facility',
                'project_date' => '05 July, 2026',
                'icon' => 'norc-new-construction',
                'image' => 'template/img/projects/project-piping-manifold.jpg',
                'sort_description' => 'Prefabrication and on-site welding of heavy ASTM A106 carbon steel steam headers, flanged distribution manifolds, and high-pressure utility piping spools.',
                'description' => '<p>Turnkey prefabrication and site erection of high-pressure steam distribution headers, flanged utility manifolds, and cooling water piping networks for a modern industrial processing plant in Jhagadia GIDC.</p><p>Constructed using ASTM A106 Grade B seamless carbon steel pipes and forged steel Class 300/600 weld-neck flanges. Executed by certified IBR welders using GTAW (TIG) root passes followed by SMAW multi-layer cap welding, complete with thermal stress relieving and epoxy coating.</p>',
                'included_items' => [
                    'Prefabricated ASTM A106 Grade B Seamless Pipe Spools',
                    'Heavy Duty Flanged Steam Header & Flow Distribution Manifolds',
                    'Certified IBR Welders with 100% Dye Penetrant & X-Ray Testing',
                    'Hydrostatic Pressure Testing up to 45 Bar with Safety Relief Calibration',
                    'High-Temperature Anti-Corrosion Primer & Thermal Insulation Cladding',
                ],
                'slider_images' => [
                    'template/img/projects/project-piping-manifold.jpg',
                    'template/img/projects/project-chemical-tank.jpg',
                    'template/img/projects-banner-engineering.jpg',
                ],
                'gallery_images' => [
                    'template/img/projects/project-piping-manifold.jpg',
                    'template/img/projects/project-chemical-tank.jpg',
                ],
                'website_url' => null,
                'is_active' => true,
                'sort_order' => 4,
            ],
        ];

        // Clear existing static records so only authentic engineering projects are active
        Project::truncate();

        foreach ($projects as $data) {
            Project::create($data);
        }
    }
}
