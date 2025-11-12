<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('manufacturers')->insert([
            ['id' => 1, 'name' => 'AmpJoin'],
            ['id' => 2, 'name' => 'AmpereDrive'],
            ['id' => 3, 'name' => 'Apex Solar'],
            ['id' => 4, 'name' => 'AuraPower'],
            ['id' => 5, 'name' => 'EcoCharge'],
            ['id' => 6, 'name' => 'ElementVolt'],
            ['id' => 7, 'name' => 'FusionPV'],
            ['id' => 8, 'name' => 'GridCore'],
            ['id' => 9, 'name' => 'HelioConnect'],
            ['id' => 10, 'name' => 'HelioTek'],
            ['id' => 11, 'name' => 'JunctionX'],
            ['id' => 12, 'name' => 'NovaGrid'],
            ['id' => 13, 'name' => 'PV-Link'],
            ['id' => 14, 'name' => 'PowerFlow'],
            ['id' => 15, 'name' => 'Quantum Energy'],
            ['id' => 16, 'name' => 'QuantumCell'],
            ['id' => 17, 'name' => 'QuickLink'],
            ['id' => 18, 'name' => 'RadiantEnergy'],
            ['id' => 19, 'name' => 'SafeLock'],
            ['id' => 20, 'name' => 'SolarSnap'],
            ['id' => 21, 'name' => 'Solarix'],
            ['id' => 22, 'name' => 'SunVolt'],
            ['id' => 23, 'name' => 'TerraCharge'],
            ['id' => 24, 'name' => 'TerraWatt'],
            ['id' => 25, 'name' => 'VoltStorage'],
            ['id' => 26, 'name' => 'ZenithSolar'],
            ['id' => 27, 'name' => 'ZenithStorage'],
        ]);
    }
}
