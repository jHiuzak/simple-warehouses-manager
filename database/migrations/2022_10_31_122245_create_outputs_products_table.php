<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('output_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('output_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->foreignId('warehouse_product_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->int('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('output_product');
    }
};
