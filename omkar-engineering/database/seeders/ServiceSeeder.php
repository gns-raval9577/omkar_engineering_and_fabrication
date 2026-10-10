<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Structural Steel Fabrication',
                'slug' => 'structural-steel-fabrication',
                'sort_description' => 'High-precision fabrication of structural steel columns, beams, girders, and heavy industrial framing.',
                'description' => "Omkar Engineering delivers comprehensive structural steel fabrication services for industrial plants, factories, and commercial structures.\n\nOur work adheres to rigorous quality control standards, ensuring structural integrity, accurate load-bearing tolerances, and weather-resistant protective coatings tailored to engineering specifications.",
                'image' => 'services-image/structural-steel-fabrication.jpg',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Industrial Shed & Warehouse Fabrication',
                'slug' => 'industrial-shed-warehouse-fabrication',
                'sort_description' => 'Heavy-duty pre-engineered building (PEB) sheds, warehouse structures, and industrial roofing solutions.',
                'description' => "We specialize in the turnkey manufacturing and erection of industrial sheds, factory workshops, and storage warehouses.\n\nBuilt with precision-welded trusses, robust purlins, and corrosion-resistant metal sheeting to withstand harsh industrial environments while maximizing usable floor space.",
                'image' => 'services-image/industrial-shed-fabrication.jpg',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Heavy Machine & Equipment Fabrication',
                'slug' => 'heavy-machine-equipment-fabrication',
                'sort_description' => 'Custom heavy machinery assemblies, industrial frames, conveyors, and manufacturing plant structures.',
                'description' => "Custom fabrication and precision assembly of heavy-duty machinery bases, material handling equipment, conveyor frames, and industrial processing units.\n\nEngineered strictly to client blueprints and rigorous operational tolerance requirements.",
                'image' => 'services-image/heavy-machine-fabrication.jpg',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Industrial Piping & Storage Tank Fabrication',
                'slug' => 'industrial-piping-storage-tank-fabrication',
                'sort_description' => 'High-grade pressure piping, process pipelines, cylindrical tanks, and chemical storage vessels.',
                'description' => "Expert fabrication of industrial storage tanks, silos, pressure vessels, and process piping systems.\n\nFeaturing certified high-grade welding, leak-proof pressure testing, and anti-corrosive internal and external protective coatings.",
                'image' => 'services-image/piping-storage-tank-fabrication.jpg',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Precision CNC Cutting & Machining',
                'slug' => 'precision-cnc-cutting-machining',
                'sort_description' => 'High-accuracy CNC laser cutting, plasma cutting, plate bending, and lathe machining services.',
                'description' => "State-of-the-art CNC plate cutting and metal machining capabilities ensuring millimeter accuracy, smooth edge finishes, and fast turnaround for complex components and batch manufacturing.\n\nCapable of handling mild steel, stainless steel, and alloy plates with tight tolerances.",
                'image' => 'services-image/cnc-fiber-laser-cutting.jpg',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Architectural & Custom Metal Fabrication',
                'slug' => 'architectural-custom-metal-fabrication',
                'sort_description' => 'Custom architectural railings, industrial gates, safety stairways, and bespoke metalwork.',
                'description' => "High-end custom metal fabrication combining structural durability with refined aesthetics.\n\nIncludes industrial safety walkways, catwalks, staircases, heavy sliding gates, and custom architectural steel installations.",
                'image' => 'services-image/custom-metal-fabrication.jpg',
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($services as $data) {
            Services::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );
        }
    }
}
