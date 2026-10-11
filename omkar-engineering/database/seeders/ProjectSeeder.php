<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Seed the initial 4 projects.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Interior Remodeling',
                'slug' => 'interior-remodeling',
                'location' => 'Westport, CT',
                'category' => 'Renovation',
                'client' => 'Micheal Brown',
                'project_date' => '26 October, 2026',
                'icon' => 'norc-new-construction',
                'image' => 'template/img/projects/5.jpg',
                'sort_description' => 'Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.',
                'description' => '<p>Quisque pretium fermentum quam, sit amet cursus ante sollicitudin morbi consequat risu consetion porttitor orci sitem iaculis nisl. Integer quis sapien nec elit ultrices euismod sit amet id lacus. Sedimerdie erat. Fusce eu nulla ac nisi cursus tincidunt uis eu est dignissim lacus dictum hendrerit quis vitae mi.</p><p>Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi consequat risus consequat porttitor fine sit amet iaculis nisl. Integer quis sapien nec elit ultrices euismod sit amet id lacus. Sed a imperdiet erat. Duis euestioni dignissim lacus dictum hendrerit quis vitae mi. Fusce eu nulla ac nisi cursus tincidunt.</p>',
                'included_items' => [
                    'Duisteyerionyer venenatis lacus gravida eros ut turpis interdum.',
                    'Sedeuter nunc volutpat mollis sapien viventa drana viventa.',
                    'Fusceler mollis augue sit amet hendrerit vestibulum.',
                ],
                'slider_images' => [
                    'template/img/interior/1.jpg',
                    'template/img/interior/2.jpg',
                    'template/img/interior/3.jpg',
                    'template/img/interior/4.jpg',
                    'template/img/interior/5.jpg',
                ],
                'gallery_images' => [
                    'template/img/news/b2.jpg',
                    'template/img/news/b3.jpg',
                ],
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Factory Construction',
                'slug' => 'factory-construction',
                'location' => 'Southlake, TX',
                'category' => 'Construction',
                'client' => 'Industrial Plant Corp',
                'project_date' => '15 September, 2026',
                'icon' => 'norc-factory',
                'image' => 'template/img/projects/1.jpg',
                'sort_description' => 'Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.',
                'description' => '<p>Comprehensive heavy structural steel fabrication and erection for an industrial manufacturing facility. Complete factory shed, crane girder beams, and overhead gantry crane installation designed for maximum operational efficiency.</p>',
                'included_items' => [
                    'Heavy Structural Steel Framing & Pre-Engineered Building (PEB)',
                    'High-Strength Crane Girders & Overhead Runway Beams',
                    'Galvanized Industrial Roofing & Wall Cladding',
                ],
                'slider_images' => [
                    'template/img/projects/1.jpg',
                    'template/img/interior/2.jpg',
                    'template/img/interior/3.jpg',
                ],
                'gallery_images' => [
                    'template/img/news/b2.jpg',
                    'template/img/news/b3.jpg',
                ],
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Residential Construction',
                'slug' => 'residential-construction',
                'location' => 'Los Altos, CA',
                'category' => 'Building',
                'client' => 'Horizon Developers',
                'project_date' => '02 August, 2026',
                'icon' => 'norc-construction-sign',
                'image' => 'template/img/projects/6.jpg',
                'sort_description' => 'Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.',
                'description' => '<p>High-precision custom architectural metalwork, structural steel mezzanine floors, modern railings, and custom stairways engineered for durability and contemporary aesthetics.</p>',
                'included_items' => [
                    'Architectural Steel Railings & Spiral Staircases',
                    'Structural Metal Framework & Balcony Supports',
                    'Anti-Corrosion Epoxy Coating & Powder Finishing',
                ],
                'slider_images' => [
                    'template/img/projects/6.jpg',
                    'template/img/interior/1.jpg',
                    'template/img/interior/4.jpg',
                ],
                'gallery_images' => [
                    'template/img/news/b2.jpg',
                    'template/img/news/b3.jpg',
                ],
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Solar Energy Construction',
                'slug' => 'solar-energy-construction',
                'location' => 'McLean, VA',
                'category' => 'Solar Energy',
                'client' => 'GreenPower Utilities',
                'project_date' => '18 July, 2026',
                'icon' => 'norc-radiation',
                'image' => 'template/img/projects/3.jpg',
                'sort_description' => 'Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.',
                'description' => '<p>Turnkey solar module mounting structure (MMS) fabrication, hot-dip galvanized ground mount structures, rooftop solar framing, and certified welding services for utility-scale solar farms.</p>',
                'included_items' => [
                    'Hot-Dip Galvanized Ground Mount Solar Structures',
                    'Cold-Formed High-Tensile C/Z Purlins & Torque Tubes',
                    'On-Site Pile Ramming & Alignment Handover',
                ],
                'slider_images' => [
                    'template/img/projects/3.jpg',
                    'template/img/interior/3.jpg',
                    'template/img/interior/5.jpg',
                ],
                'gallery_images' => [
                    'template/img/news/b2.jpg',
                    'template/img/news/b3.jpg',
                ],
                'is_active' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($projects as $data) {
            Project::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );
        }
    }
}
