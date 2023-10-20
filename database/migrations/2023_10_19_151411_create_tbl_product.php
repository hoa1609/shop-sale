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
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('product_name')->nullable();
            $table->text('product_desc')->nullable();
            $table->text('product_content')->nullable();
            $table->decimal('product_price', 10, 2)->nullable(); // Kiểu dữ liệu decimal với 10 chữ số tổng, trong đó có 2 chữ số sau dấu thập phân
            $table->string('product_image')->nullable();
            $table->integer('product_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_product');
    }
};
