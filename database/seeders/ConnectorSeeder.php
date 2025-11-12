<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConnectorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('connectors')->insert([
            [
                'name' => 'SafeLock Pro Pair M/F',
                'manufacturer_id' => 19,
                'price' => 7.99,
                'connector_type' => 'MC4',
                'description' => 'This MC4-compatible connector pair (Male/Female) ensures a secure, IP67 waterproof connection for 10 or 12 AWG solar cable. Made from durable PPO material for long-term outdoor use.'
            ],
            [
                'name' => 'PV-Link T-Branch 2-1',
                'manufacturer_id' => 13,
                'price' => 18.5,
                'connector_type' => 'T-Branch',
                'description' => 'This T-Branch connector (1 Male to 2 Female) allows for easy parallel wiring of solar panels. It features a quick snap-in locking mechanism and is IP67 rated.'
            ],
            [
                'name' => 'AmpJoin Y-Splitter Set',
                'manufacturer_id' => 1,
                'price' => 21.99,
                'connector_type' => 'Y-Branch',
                'description' => 'A 1-to-2 Y-branch connector set (M/FF and F/MM) for efficient parallel string connections. These connectors are TUV certified and built for low-resistance, safe power transmission.'
            ],
            [
                'name' => 'SolarSnap H4 Pair',
                'manufacturer_id' => 20,
                'price' => 9.95,
                'connector_type' => 'Amphenol H4',
                'description' => 'Industry standard Amphenol H4 connector pair. These are known for their robust design, low contact resistance, and excellent durability in all weather conditions.'
            ],
            [
                'name' => 'QuickLink MC3 Set (10-pack)',
                'manufacturer_id' => 17,
                'price' => 35.0,
                'connector_type' => 'MC3',
                'description' => 'A bulk pack of 10 pairs of older generation MC3 connectors. These are perfect for repair or maintenance on legacy solar installations that do not use the MC4 standard.'
            ],
            [
                'name' => 'SafeLock Inline Fuse 15A',
                'manufacturer_id' => 19,
                'price' => 14.99,
                'connector_type' => 'MC4',
                'description' => 'This MC4-compatible inline fuse holder comes with a 15A fuse. It provides essential overcurrent protection for your solar strings, preventing damage and ensuring system safety.'
            ],
            [
                'name' => 'PV-Link 4-to-1 Combiner',
                'manufacturer_id' => 13,
                'price' => 32.0,
                'connector_type' => 'MC4 Combiner',
                'description' => 'This 4-string parallel combiner connector simplifies wiring. It takes four inputs and combines them into one output, all within a single IP68 waterproof housing.'
            ],
            [
                'name' => 'AmpJoin Bulkhead M/F Pair',
                'manufacturer_id' => 1,
                'price' => 12.5,
                'connector_type' => 'MC4 Bulkhead',
                'description' => 'A panel-mount MC4 connector pair (Male/Female). These are designed to be mounted on the wall of a combiner box or inverter, providing a clean, waterproof pass-through.'
            ],
            [
                'name' => 'HelioConnect Evo 2 Pair',
                'manufacturer_id' => 9,
                'price' => 10.5,
                'connector_type' => 'MC4-Evo 2',
                'description' => 'The next generation MC4-Evo 2 connector pair. These are certified for 1500V systems, offering higher performance and suitability for modern, high-voltage solar arrays.'
            ],
            [
                'name' => 'JunctionX Diode Connector',
                'manufacturer_id' => 11,
                'price' => 16.0,
                'connector_type' => 'MC4',
                'description' => 'An MC4-compatible connector with an integrated bypass diode (15A). This is useful for preventing reverse current flow in shaded panels or custom parallel configurations.'
            ],
            [
                'name' => 'SafeLock Pro Pair (10-pack)',
                'manufacturer_id' => 19,
                'price' => 49.99,
                'connector_type' => 'MC4',
                'description' => 'A bulk pack of 10 pairs of SafeLock Pro MC4 connectors. This is an economical choice for professional installers, ensuring you have quality connectors ready for the job.'
            ],
            [
                'name' => 'PV-Link T-Branch 3-1',
                'manufacturer_id' => 13,
                'price' => 24.0,
                'connector_type' => 'T-Branch',
                'description' => 'This 1-to-3 T-Branch connector (1 Male to 3 Female) is perfect for combining three solar panels in parallel. It maintains an IP67 rating for durable outdoor use.'
            ],
            [
                'name' => 'AmpJoin Y-Splitter (Long)',
                'manufacturer_id' => 1,
                'price' => 25.0,
                'connector_type' => 'Y-Branch',
                'description' => 'A 1-to-2 Y-branch connector set with 1-foot extension cables. This provides extra flexibility when wiring panels that are spaced further apart on the racking.'
            ],
            [
                'name' => 'SolarSnap H4 Tool Kit',
                'manufacturer_id' => 20,
                'price' => 45.0,
                'connector_type' => 'MC3',
                'description' => 'A complete crimping and assembly tool kit for Amphenol H4 connectors. This ensures you get perfect, reliable crimps every time for a safe and secure connection.'
            ],
            [
                'name' => 'QuickLink MC4 Wrench Set',
                'manufacturer_id' => 17,
                'price' => 8.99,
                'connector_type' => 'MC4',
                'description' => 'A pair of lightweight plastic wrenches designed specifically for tightening and loosening MC4 connectors. A must-have tool for any solar installer to prevent under-tightening.'
            ],
            [
                'name' => 'SafeLock Inline Fuse 20A',
                'manufacturer_id' => 19,
                'price' => 15.5,
                'connector_type' => 'MC4',
                'description' => 'A 20A inline fuse holder with an MC4-compatible design. Use this to protect your strings from overcurrent, especially in systems with larger, high-power panels.'
            ],
            [
                'name' => 'PV-Link 2-to-1 Combiner',
                'manufacturer_id' => 13,
                'price' => 19.0,
                'connector_type' => 'MC4 Combiner',
                'description' => 'A simple 2-string parallel combiner connector (MM/F). This is a clean and waterproof alternative to using a standard Y-splitter for combining two panel strings.'
            ],
            [
                'name' => 'AmpJoin Bulkhead Set (5-pack)',
                'manufacturer_id' => 1,
                'price' => 40.0,
                'connector_type' => 'MC4 Bulkhead',
                'description' => 'A 5-pack of panel-mount MC4 bulkhead connector pairs. Ideal for building custom combiner boxes or for inverter manufacturers needing reliable DC inputs.'
            ],
            [
                'name' => 'HelioConnect Evo 2 T-Branch',
                'manufacturer_id' => 9,
                'price' => 22.0,
                'connector_type' => 'MC4-Evo 2',
                'description' => 'A T-branch connector designed for the 1500V MC4-Evo 2 standard. This is essential for high-voltage commercial and utility-scale solar projects.'
            ],
            [
                'name' => 'JunctionX End Cap (10-pack)',
                'manufacturer_id' => 11,
                'price' => 12.99,
                'connector_type' => 'MC4 End Cap',
                'description' => 'A pack of 10 male and female MC4-compatible dust caps. These are crucial for safely covering and weatherproofing any unused connectors on your inverter or string.'
            ],
            [
                'name' => 'SafeLock Pro M/F 8AWG',
                'manufacturer_id' => 19,
                'price' => 9.5,
                'connector_type' => 'MC4',
                'description' => 'A heavy-duty MC4-compatible connector pair designed for larger 8 AWG solar cable. This is necessary for long cable runs or high-current strings to minimize voltage drop.'
            ],
            [
                'name' => 'PV-Link T-Branch 2-Way (M/F)',
                'manufacturer_id' => 13,
                'price' => 18.99,
                'connector_type' => 'T-Branch',
                'description' => 'A 2-input, 2-output T-branch connector. This is useful for creating complex parallel-series string configurations while maintaining a tidy and waterproof wiring setup.'
            ],
            [
                'name' => 'AmpJoin Y-Splitter 3-1',
                'manufacturer_id' => 1,
                'price' => 28.0,
                'connector_type' => 'Y-Branch',
                'description' => 'A 1-to-3 Y-branch connector set (M/FFF and F/MMM). This simplifies the wiring for combining three parallel strings into a single homerun.'
            ],
            [
                'name' => 'SolarSnap H4 Inline Fuse 30A',
                'manufacturer_id' => 20,
                'price' => 19.99,
                'connector_type' => 'Amphenol H4',
                'description' => 'A 30A inline fuse holder using the Amphenol H4 connector standard. This provides robust string protection for systems built with H4 connectors.'
            ],
            [
                'name' => 'QuickLink MC4 Crimping Tool',
                'manufacturer_id' => 17,
                'price' => 34.99,
                'connector_type' => 'MC4',
                'description' => 'A high-precision ratchet crimping tool for MC4 metal pins. This tool ensures a gas-tight, reliable crimp that will last for the 25+ year life of the solar system.'
            ],
            [
                'name' => 'SafeLock Inline Fuse 10A',
                'manufacturer_id' => 19,
                'price' => 14.5,
                'connector_type' => 'MC4',
                'description' => 'A 10A inline fuse holder for MC4 connectors. This is a common size for protecting strings of smaller, lower-current solar panels from fault conditions.'
            ],
            [
                'name' => 'PV-Link 3-to-1 Combiner',
                'manufacturer_id' => 13,
                'price' => 28.0,
                'connector_type' => 'MC4 Combiner',
                'description' => 'This 3-string parallel combiner connector (MMM/F) simplifies your wiring. Its IP68-rated housing ensures it can be installed anywhere on the roof or array.'
            ],
            [
                'name' => 'AmpJoin Bulkhead (Female only)',
                'manufacturer_id' => 1,
                'price' => 6.99,
                'connector_type' => 'MC4 Bulkhead',
                'description' => 'A single female panel-mount MC4 connector. This is useful for custom projects or repairs where only one side of the bulkhead connection is needed.'
            ],
            [
                'name' => 'HelioConnect Evo 2 Y-Branch',
                'manufacturer_id' => 9,
                'price' => 25.0,
                'connector_type' => 'Y-Branch',
                'description' => 'A Y-branch splitter set for 1500V MC4-Evo 2 connectors. This is the professional standard for parallel connections in high-voltage utility solar farms.'
            ],
            [
                'name' => 'JunctionX Disconnect Key Set',
                'manufacturer_id' => 11,
                'price' => 7.5,
                'connector_type' => 'MC3',
                'description' => 'A set of two MC3 disconnect tools. These are essential for safely unlocking and separating MC3 connectors without damaging the locking clips.'
            ],
            [
                'name' => 'SafeLock Pro Pair 10AWG (50-pack)',
                'manufacturer_id' => 19,
                'price' => 220.0,
                'connector_type' => 'MC4',
                'description' => 'A bulk box of 50 pairs of SafeLock Pro MC4 connectors. This is the most economical option for professional solar installers doing large residential or commercial jobs.'
            ],
            [
                'name' => 'PV-Link T-Branch 3-Way (M/F)',
                'manufacturer_id' => 13,
                'price' => 25.0,
                'connector_type' => 'T-Branch',
                'description' => 'A 3-input, 3-output T-branch connector. This advanced connector is designed for creating matrix-style parallel connections in large, complex solar arrays.'
            ],
            [
                'name' => 'AmpJoin Y-Splitter 4-1',
                'manufacturer_id' => 1,
                'price' => 35.0,
                'connector_type' => 'Y-Branch',
                'description' => 'A 1-to-4 Y-branch connector set. This allows you to combine four parallel strings into one, reducing the number of homerun cables needed to the combiner box.'
            ],
            [
                'name' => 'SolarSnap H4 T-Branch',
                'manufacturer_id' => 20,
                'price' => 24.0,
                'connector_type' => 'Amphenol H4',
                'description' => 'A T-branch connector (1 Male to 2 Female) for systems using Amphenol H4 connectors. Ensures compatibility and a waterproof seal for parallel connections.'
            ],
            [
                'name' => 'QuickLink MC3 to MC4 Adapter',
                'manufacturer_id' => 17,
                'price' => 11.99,
                'connector_type' => 'Adapter Cable',
                'description' => 'A 1-foot adapter cable with an MC3 connector on one end and an MC4 on the other. This is essential for retrofitting new panels into an older, existing MC3-based system.'
            ],
            [
                'name' => 'SafeLock Inline Diode 15A',
                'manufacturer_id' => 19,
                'price' => 17.0,
                'connector_type' => 'MC4',
                'description' => 'A 15A inline blocking diode with MC4 connectors. This is used to prevent back-feeding in multi-string setups, especially with strings of different lengths or orientations.'
            ],
            [
                'name' => 'PV-Link 5-to-1 Combiner',
                'manufacturer_id' => 13,
                'price' => 42.0,
                'connector_type' => 'MC4 Combiner',
                'description' => 'This 5-string parallel combiner connector simplifies wiring on large residential or small C&I projects. Its IP68 housing is built to last.'
            ],
            [
                'name' => 'AmpJoin Bulkhead (Male only)',
                'manufacturer_id' => 1,
                'price' => 6.99,
                'connector_type' => 'MC4 Bulkhead',
                'description' => 'A single male panel-mount MC4 connector. Perfect for custom-built power stations or combiner boxes where you need a secure, waterproof DC input point.'
            ],
            [
                'name' => 'HelioConnect Evo 2 Crimp Tool',
                'manufacturer_id' => 9,
                'price' => 49.99,
                'connector_type' => 'MC4-Evo 2',
                'description' => 'A certified ratchet crimping tool specifically for MC4-Evo 2 connector pins. This is required to ensure proper, safe connections for 1500V systems.'
            ],
            [
                'name' => 'JunctionX Solar Label Kit',
                'manufacturer_id' => 11,
                'price' => 25.0,
                'connector_type' => 'Labels',
                'description' => 'A complete kit of UV-resistant, outdoor-rated warning labels (\'PV SYSTEM\', \'DC DISCONNECT\', etc.). These are required by electrical code for a safe, compliant installation.'
            ],
            [
                'name' => 'SafeLock Pro Pair 12AWG (50-pack)',
                'manufacturer_id' => 19,
                'price' => 210.0,
                'connector_type' => 'MC4',
                'description' => 'A bulk box of 50 pairs of SafeLock Pro MC4 connectors optimized for 12 AWG cable. This is a standard size for most residential solar panel leads.'
            ],
            [
                'name' => 'PV-Link T-Branch 4-1',
                'manufacturer_id' => 13,
                'price' => 29.99,
                'connector_type' => 'T-Branch',
                'description' => 'A 1-to-4 T-branch connector (1 Male to 4 Female). This is a compact solution for paralleling four panels, reducing wiring clutter and installation time.'
            ],
            [
                'name' => 'AmpJoin Y-Splitter (Long 3ft)',
                'manufacturer_id' => 1,
                'price' => 29.0,
                'connector_type' => 'Y-Branch',
                'description' => 'A 1-to-2 Y-branch connector set with 3-foot extension cables. This is perfect for systems using microinverters or optimizers where connections are far apart.'
            ],
            [
                'name' => 'SolarSnap H4 Disconnect Tool',
                'manufacturer_id' => 20,
                'price' => 9.99,
                'connector_type' => 'Amphenol H4',
                'description' => 'A specialized metal disconnect tool for Amphenol H4 connectors. This is much more durable than plastic tools and is required to unlock H4 connectors.'
            ],
            [
                'name' => 'QuickLink MC4 to SAE Adapter',
                'manufacturer_id' => 17,
                'price' => 14.99,
                'connector_type' => 'Adapter Cable',
                'description' => 'A 2-foot adapter cable with an MC4 pair on one end and a standard 2-pin SAE connector on the other. This is ideal for connecting solar panels to portable power stations.'
            ],
            [
                'name' => 'SafeLock Inline Fuse 25A',
                'manufacturer_id' => 19,
                'price' => 16.5,
                'connector_type' => 'MC4',
                'description' => 'A 25A inline fuse holder with MC4 connectors. This is used for protecting higher-current strings, often found in systems with bifacial or large-format panels.'
            ],
            [
                'name' => 'PV-Link 6-to-1 Combiner',
                'manufacturer_id' => 13,
                'price' => 49.5,
                'connector_type' => 'MC4',
                'description' => 'This 6-string parallel combiner connector is the largest in its class. It significantly simplifies homerun wiring for large residential rooftop arrays.'
            ],
            [
                'name' => 'AmpJoin Bulkhead Wrench',
                'manufacturer_id' => 1,
                'price' => 10.0,
                'connector_type' => 'MC3',
                'description' => 'A specialized wrench for tightening the plastic nut on MC3 bulkhead connectors. This ensures a proper IP67 seal against the combiner box enclosure.'
            ],
            [
                'name' => 'HelioConnect Evo 2 Inline Fuse',
                'manufacturer_id' => 9,
                'price' => 24.99,
                'connector_type' => 'MC4-Evo 2',
                'description' => 'A 20A inline fuse holder compatible with the 1500V MC4-Evo 2 standard. This is the correct choice for overcurrent protection in high-voltage strings.'
            ],
            [
                'name' => 'JunctionX MC4 Assembly Tool',
                'manufacturer_id' => 11,
                'price' => 15.0,
                'connector_type' => 'MC4',
                'description' => 'A 3-in-1 tool for MC4 connectors. It includes two disconnect keys for unlocking and two wrench heads for tightening the cable gland securely.'
            ],
        ]);
    }
}