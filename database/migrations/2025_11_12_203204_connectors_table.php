<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('connectors', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->unsignedBigInteger('manufacturer_id');
            $table->string('name');
            $table->decimal('price', 5);
            $table->string('connector_type');
            $table->text('description');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('connectors');
    }
};
