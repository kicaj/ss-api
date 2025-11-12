<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('panels')->insert([
            [
                'name' => 'Solarix Prime 450',
                'manufacturer_id' => 21,
                'price' => 279.99,
                'power_output' => 450,
                'description' => 'This high-efficiency monocrystalline panel offers an impressive 450W output, making it ideal for residential rooftops. Features advanced PERC technology and a robust black aluminum frame for enhanced durability.'
            ],
            [
                'name' => 'RadiantEnergy X-Pro 550',
                'manufacturer_id' => 18,
                'price' => 489.5,
                'power_output' => 550,
                'description' => 'Experience top-tier performance with the X-Pro 550, a 550W bifacial module. Its N-type TOPCon technology ensures excellent energy harvest even in low-light conditions. Backed by a 30-year performance warranty.'
            ],
            [
                'name' => 'QuantumCell Q.Peak 400',
                'manufacturer_id' => 16,
                'price' => 225.0,
                'power_output' => 400,
                'description' => 'A cost-effective solution for large-scale commercial projects, the Q.Peak 400 provides 400W of reliable power. Built with high-density cell technology and a robust design to withstand harsh weather.'
            ],
            [
                'name' => 'FusionPV Flex 310',
                'manufacturer_id' => 7,
                'price' => 149.99,
                'power_output' => 310,
                'description' => 'This lightweight, flexible 310W panel is perfect for RVs, boats, and non-standard roof shapes. Its durable polymer construction resists salt mist and high winds, offering versatile installation options.'
            ],
            [
                'name' => 'ZenithSolar Vertex 600',
                'manufacturer_id' => 26,
                'price' => 499.0,
                'power_output' => 600,
                'description' => 'Maximize your power density with the ZenithSolar Vertex 600. This 600W panel uses large-format cells and half-cut technology to reduce internal losses and boost efficiency for utility-scale applications.'
            ],
            [
                'name' => 'SunVolt Guardian 380',
                'manufacturer_id' => 22,
                'price' => 199.99,
                'power_output' => 380,
                'description' => 'The SunVolt Guardian 380 is a reliable polycrystalline panel designed for budget-conscious installations. Its 380W output and proven performance make it a workhorse for grid-tied systems.'
            ],
            [
                'name' => 'TerraWatt Edge 430',
                'manufacturer_id' => 24,
                'price' => 255.75,
                'power_output' => 430,
                'description' => 'This 430W monocrystalline panel features a sleek all-black design, perfect for homeowners who value aesthetics. It combines high efficiency with excellent temperature coefficients for great performance.'
            ],
            [
                'name' => 'HelioTek Bifacial 540',
                'manufacturer_id' => 10,
                'price' => 475.0,
                'power_output' => 540,
                'description' => 'The HelioTek Bifacial 540 captures sunlight from both sides, increasing total energy yield by up to 25%. This 540W module is ideal for ground-mount systems with reflective surfaces.'
            ],
            [
                'name' => 'Apex Solar Apex 410',
                'manufacturer_id' => 3,
                'price' => 235.5,
                'power_output' => 410,
                'description' => 'A high-performance 410W monocrystalline panel from Apex Solar. It utilizes multi-busbar technology to improve reliability and efficiency, ensuring a long service life and stable output.'
            ],
            [
                'name' => 'NovaGrid PowerBlock 500',
                'manufacturer_id' => 12,
                'price' => 410.0,
                'power_output' => 500,
                'description' => 'The NovaGrid PowerBlock 500 is engineered for commercial and industrial rooftops. This 500W panel offers a fantastic balance of power, size, and cost, optimizing your return on investment.'
            ],
            [
                'name' => 'Solarix Prime 440',
                'manufacturer_id' => 21,
                'price' => 269.99,
                'power_output' => 440,
                'description' => 'This 440W monocrystalline panel is part of the flagship Prime series. It features anti-reflective coated glass and a reinforced frame, making it a durable choice for all climates.'
            ],
            [
                'name' => 'RadiantEnergy X-Pro 530',
                'manufacturer_id' => 18,
                'price' => 465.0,
                'power_output' => 530,
                'description' => 'The X-Pro 530 is a high-output 530W bifacial module. Its advanced cell structure minimizes power degradation, ensuring a reliable and high-yield energy source for decades.'
            ],
            [
                'name' => 'QuantumCell Q.Peak 390',
                'manufacturer_id' => 16,
                'price' => 215.0,
                'power_output' => 390,
                'description' => 'This 390W all-black monocrystalline panel provides excellent aesthetics for residential installations. Its high cell density and low-light performance guarantee strong energy production year-round.'
            ],
            [
                'name' => 'FusionPV Shingle 350',
                'manufacturer_id' => 7,
                'price' => 180.0,
                'power_output' => 350,
                'description' => 'The FusionPV Shingle 350 uses innovative overlapping cell technology to eliminate busbars. This 350W panel not only looks great but also performs exceptionally well in partial shade.'
            ],
            [
                'name' => 'ZenithSolar Vertex 580',
                'manufacturer_id' => 26,
                'price' => 480.0,
                'power_output' => 580,
                'description' => 'A utility-scale champion, the 580W Vertex panel from ZenithSolar is built for large projects. Its 210mm cells and high-efficiency design help reduce balance-of-system (BOS) costs.'
            ],
            [
                'name' => 'SunVolt Guardian 405',
                'manufacturer_id' => 22,
                'price' => 229.5,
                'power_output' => 405,
                'description' => 'The Guardian 405 is a robust 405W monocrystalline panel. It is certified to withstand high snow (5400 Pa) and wind (2400 Pa) loads, making it perfect for harsh environments.'
            ],
            [
                'name' => 'TerraWatt Edge 450',
                'manufacturer_id' => 24,
                'price' => 275.0,
                'power_output' => 450,
                'description' => 'This 450W panel from TerraWatt is a reliable workhorse. It features half-cut cell technology to improve shade tolerance and reduce hotspots, ensuring system longevity and safety.'
            ],
            [
                'name' => 'HelioTek Mono 395',
                'manufacturer_id' => 10,
                'price' => 219.99,
                'power_output' => 395,
                'description' => 'A classic 395W monocrystalline panel with a silver frame. It offers solid efficiency and a proven track record, making it a safe and economical choice for standard installations.'
            ],
            [
                'name' => 'Apex Solar Apex 500',
                'manufacturer_id' => 3,
                'price' => 405.0,
                'power_output' => 500,
                'description' => 'The Apex 500 is a high-power 500W module designed for C&I projects. Its large wafer size and 10-busbar design contribute to its high power density and reliability.'
            ],
            [
                'name' => 'NovaGrid PowerBlock 440',
                'manufacturer_id' => 12,
                'price' => 260.0,
                'power_output' => 440,
                'description' => 'This 440W panel features a durable, corrosion-resistant frame and high-transparency glass. It\'s an excellent all-around performer for both rooftop and ground-mount solar arrays.'
            ],
            [
                'name' => 'Solarix Prime 460',
                'manufacturer_id' => 21,
                'price' => 295.0,
                'power_output' => 460,
                'description' => 'The Solarix Prime 460 is a premium 460W monocrystalline panel. It boasts a low temperature coefficient, ensuring stable power output even on the hottest summer days.'
            ],
            [
                'name' => 'RadiantEnergy X-Pro 520',
                'manufacturer_id' => 18,
                'price' => 450.0,
                'power_output' => 520,
                'description' => 'This 520W bifacial module is a powerhouse. Its transparent backsheet design allows it to capture reflected light, boosting overall energy production significantly in the right conditions.'
            ],
            [
                'name' => 'QuantumCell Q.Peak 415',
                'manufacturer_id' => 16,
                'price' => 240.0,
                'power_output' => 415,
                'description' => 'The 415W Q.Peak panel from QuantumCell features advanced anti-LID and anti-PID technology. This ensures your system performs reliably and safely for its entire 25-year lifespan.'
            ],
            [
                'name' => 'FusionPV Flex 300',
                'manufacturer_id' => 7,
                'price' => 145.0,
                'power_output' => 300,
                'description' => 'An ultra-light 300W flexible panel perfect for marine applications. Its ETFE top layer is non-stick and self-cleaning, providing consistent performance with minimal maintenance.'
            ],
            [
                'name' => 'ZenithSolar Vertex 590',
                'manufacturer_id' => 26,
                'price' => 490.0,
                'power_output' => 590,
                'description' => 'This 590W high-capacity panel is designed to lower the LCOE for utility-scale projects. Its high module efficiency means fewer panels, less racking, and lower installation costs.'
            ],
            [
                'name' => 'SunVolt Guardian 370',
                'manufacturer_id' => 22,
                'price' => 190.0,
                'power_output' => 370,
                'description' => 'A dependable 370W polycrystalline panel that offers excellent value. Its robust build and proven field performance make it a popular choice for large, cost-sensitive projects.'
            ],
            [
                'name' => 'TerraWatt Edge 420',
                'manufacturer_id' => 24,
                'price' => 245.0,
                'power_output' => 420,
                'description' => 'The TerraWatt Edge 420 is a 420W monocrystalline panel with a sleek black-on-black design. It provides excellent curb appeal without compromising on power or efficiency.'
            ],
            [
                'name' => 'HelioTek Bifacial 535',
                'manufacturer_id' => 10,
                'price' => 469.0,
                'power_output' => 535,
                'description' => 'Capture more energy with the 535W HelioTek Bifacial. This panel is perfect for carports, pergolas, and ground-mounts where light can be captured from the rear side.'
            ],
            [
                'name' => 'Apex Solar Apex 390',
                'manufacturer_id' => 3,
                'price' => 210.0,
                'power_output' => 390,
                'description' => 'This 390W monocrystalline panel is a popular choice for residential systems. Its compact size and high efficiency make it a great fit for roofs with limited space.'
            ],
            [
                'name' => 'NovaGrid PowerBlock 480',
                'manufacturer_id' => 12,
                'price' => 380.0,
                'power_output' => 480,
                'description' => 'The 480W PowerBlock panel is engineered for reliability. It features 9-busbar half-cut cells, which reduce resistive losses and enhance overall module efficiency significantly.'
            ],
            [
                'name' => 'Solarix Prime 435',
                'manufacturer_id' => 21,
                'price' => 260.0,
                'power_output' => 435,
                'description' => 'A 435W monocrystalline panel from the Solarix Prime series. It offers a great balance of performance and price, backed by a solid 25-year linear power warranty.'
            ],
            [
                'name' => 'RadiantEnergy X-Pro 545',
                'manufacturer_id' => 18,
                'price' => 480.0,
                'power_output' => 545,
                'description' => 'The 545W X-Pro bifacial module is a top-performer. Its N-type cells have virtually zero light-induced degradation (LID), ensuring more power over the system\'s lifetime.'
            ],
            [
                'name' => 'QuantumCell Q.Peak 385',
                'manufacturer_id' => 16,
                'price' => 205.0,
                'power_output' => 385,
                'description' => 'This 385W panel offers excellent performance in low-light and high-temperature conditions. Its robust frame is certified for heavy snow loads, making it ideal for northern climates.'
            ],
            [
                'name' => 'FusionPV Shingle 360',
                'manufacturer_id' => 7,
                'price' => 189.0,
                'power_output' => 360,
                'description' => 'The 360W shingled panel from FusionPV provides a beautiful, seamless look. The overlapping cell design maximizes the active panel area for higher power density.'
            ],
            [
                'name' => 'ZenithSolar Vertex 570',
                'manufacturer_id' => 26,
                'price' => 470.0,
                'power_output' => 570,
                'description' => 'This 570W panel is a workhorse for solar farms. Its 1/3-cut cell design and multi-busbar technology ensure high reliability and power output for large-scale energy generation.'
            ],
            [
                'name' => 'SunVolt Guardian 410',
                'manufacturer_id' => 22,
                'price' => 235.0,
                'power_output' => 410,
                'description' => 'The 410W Guardian panel is a versatile monocrystalline module. It\'s suitable for everything from residential rooftops to large commercial systems, offering solid performance and value.'
            ],
            [
                'name' => 'TerraWatt Edge 400',
                'manufacturer_id' => 24,
                'price' => 220.0,
                'power_output' => 400,
                'description' => 'A 400W all-black panel that combines aesthetics with performance. Its half-cut cell layout improves shade tolerance, making it a smart choice for roofs with obstructions.'
            ],
            [
                'name' => 'HelioTek Mono 450',
                'manufacturer_id' => 10,
                'price' => 280.0,
                'power_output' => 450,
                'description' => 'This 450W monocrystalline panel from HelioTek is a powerful and reliable option. It uses 182mm wafers to achieve higher efficiency and power output in a standard-sized frame.'
            ],
            [
                'name' => 'Apex Solar Apex 440',
                'manufacturer_id' => 3,
                'price' => 265.0,
                'power_output' => 440,
                'description' => 'The Apex 440 combines 9-busbar and half-cut cell technologies. This 440W panel delivers excellent performance and reliability for any grid-tied solar project.'
            ],
            [
                'name' => 'NovaGrid PowerBlock 490',
                'manufacturer_id' => 12,
                'price' => 399.0,
                'power_output' => 490,
                'description' => 'This 490W panel is designed for commercial and industrial applications. Its high power density helps to maximize the energy output from limited roof space.'
            ],
            [
                'name' => 'Solarix Prime 425',
                'manufacturer_id' => 21,
                'price' => 250.0,
                'power_output' => 425,
                'description' => 'The 425W Solarix Prime is a high-efficiency monocrystalline panel. It\'s built to last, featuring a salt-mist and ammonia-resistant frame for coastal or agricultural areas.'
            ],
            [
                'name' => 'RadiantEnergy X-Pro 500',
                'manufacturer_id' => 18,
                'price' => 420.0,
                'power_output' => 500,
                'description' => 'A 500W bifacial panel with a dual-glass design. This module offers extreme durability and fire safety, in addition to the extra energy yield from its bifacial cells.'
            ],
            [
                'name' => 'QuantumCell Q.Peak 405',
                'manufacturer_id' => 16,
                'price' => 230.0,
                'power_output' => 405,
                'description' => 'This 405W panel is a residential favorite. Its Q.ANTUM cell technology ensures high performance, and its all-black design provides a sleek, modern look on any roof.'
            ],
            [
                'name' => 'FusionPV Flex 320',
                'manufacturer_id' => 7,
                'price' => 155.0,
                'power_output' => 320,
                'description' => 'The 320W flexible panel from FusionPV is incredibly lightweight at only 5 lbs. It\'s perfect for curved surfaces and mobile applications where traditional glass panels won\'t work.'
            ],
            [
                'name' => 'ZenithSolar Vertex 560',
                'manufacturer_id' => 26,
                'price' => 460.0,
                'power_output' => 560,
                'description' => 'This 560W panel is built on the 210mm large-wafer platform. It\'s optimized for utility-scale projects, delivering maximum power and reducing installation labor costs.'
            ],
            [
                'name' => 'SunVolt Guardian 390',
                'manufacturer_id' => 22,
                'price' => 212.0,
                'power_output' => 390,
                'description' => 'A 390W monocrystalline panel known for its reliability. The Guardian 390 has passed rigorous testing to ensure it performs optimally even in challenging weather conditions.'
            ],
            [
                'name' => 'TerraWatt Edge 415',
                'manufacturer_id' => 24,
                'price' => 239.0,
                'power_output' => 415,
                'description' => 'The 415W TerraWatt Edge features a striking all-black design. Its half-cut cell technology not only boosts power but also makes the panel more resilient to micro-cracks.'
            ],
            [
                'name' => 'HelioTek Bifacial 525',
                'manufacturer_id' => 10,
                'price' => 460.0,
                'power_output' => 525,
                'description' => 'This 525W bifacial module features a robust dual-glass construction. It\'s designed for maximum lifetime yield, capturing ambient light from the rear to boost production.'
            ],
            [
                'name' => 'Apex Solar Apex 450',
                'manufacturer_id' => 3,
                'price' => 279.0,
                'power_output' => 450,
                'description' => 'The 450W Apex panel is a powerful all-rounder. Its 9-busbar design reduces internal resistance, leading to higher efficiency and a lower cell operating temperature.'
            ],
            [
                'name' => 'NovaGrid PowerBlock 460',
                'manufacturer_id' => 12,
                'price' => 350.0,
                'power_output' => 460,
                'description' => 'A 460W panel perfect for commercial rooftops. The PowerBlock 460 offers a high power-to-size ratio, allowing you to fit more solar capacity in a limited area.'
            ],
        ]);
    }
}
