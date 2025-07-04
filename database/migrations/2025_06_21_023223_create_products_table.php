<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('category_name');
        $table->string('product_name');
        $table->text('product_details');
        $table->decimal('product_price', 10, 2);
        $table->decimal('commission', 5, 2);
        $table->string('product_image'); // ✅ only once
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
