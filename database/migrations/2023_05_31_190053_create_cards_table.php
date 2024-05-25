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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); //nom de client  --nullable == pas obligatoir
            $table->string('phone')->nullable(); //phone nuber
            $table->string('adriss')->nullable(); //
            $table->string('product_title')->nullable();//nom de produit
            $table->string('qte')->nullable();
            $table->string('price')->nullable();
            $table->string('statuscmd')->default("En attente"); //status de commmande
            $table->string("statuspay")->default("impayé"); //sttus de payemnt
            $table->string('dateLiv')->default("dd/mm/yy"); //date de livraison
            $table->timestamps(); //date craeation date update
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
