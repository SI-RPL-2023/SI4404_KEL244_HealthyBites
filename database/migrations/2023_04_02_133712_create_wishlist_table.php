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
        Schema::create('wishlist', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wishlistID');
            $table->foreign('wishlistID')->references('id')->on('wishlist');
            $table->unsignedBigInteger('customerID');
            $table->foreign('customerID')->references('id')->on('users');
            $table->unsignedBigInteger('productID');
            $table->foreign('productID')->references('id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlist');
    }
};
