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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderID');
            $table->foreign('orderID')->references('id')->on('pesanan');
            $table->unsignedBigInteger('customerID');
            $table->foreign('customertID')->references('id')->on('users');
            $table->date('date');
            $table->string('status');
            $table->integer('totalamount');
            $table->string('items');
            //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
