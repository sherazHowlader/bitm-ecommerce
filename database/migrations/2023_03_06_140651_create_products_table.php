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
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('brand_id');
            $table->integer('unit_id');
            $table->string('name');
            $table->string('code')->unique();
            $table->string('slug');
            $table->integer('regular_price');
            $table->integer('selling_price');
            $table->integer('stock_amount');
            $table->text('short_description');
            $table->longText('long_description');
            $table->text('image');
            $table->integer('hit_count');
            $table->integer('sales_count');
            $table->string('featured_status');
            $table->tinyInteger('status');
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
