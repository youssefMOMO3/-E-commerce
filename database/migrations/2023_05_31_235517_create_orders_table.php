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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('adriss')->nullable();
            $table->string('product_title')->nullable();
            $table->string('qte')->nullable();
            $table->string('price')->nullable();
            $table->string('statuscmd')->default("En attente");
            $table->string("statuspay")->default("impayé");
            $table->string('dateLiv')->default('dd/mm/yy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
