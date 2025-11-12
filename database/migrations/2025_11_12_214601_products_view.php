<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB; // <-- Ważne, aby to zaimportować!
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("
            CREATE VIEW products AS

                SELECT 
                    CONCAT('battery_', id) AS id,
                    manufacturer_id,
                    'battery' AS category,
                    name, 
                    description, 
                    price,
                    capacity, 
                    NULL AS power_output, 
                    NULL AS connector_type
                FROM batteries

            UNION ALL

                SELECT 
                    CONCAT('panel_', id) AS id,
                    manufacturer_id,
                    'panel' AS category,
                    name, 
                    description, 
                    price, 
                    NULL AS capacity,
                    power_output,
                    NULL AS connector_type
                FROM panels

            UNION ALL

                SELECT 
                    CONCAT('connector_', id) AS id,
                    manufacturer_id,
                    'connector' AS category,
                    name, 
                    description, 
                    price, 
                    NULL AS capacity,
                    NULL AS power_output,
                    connector_type
                FROM connectors;
        ");
    }

    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS products;');
    }
};