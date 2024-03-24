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
            $table->unsignedBigInteger('customerId');
            $table->unsignedBigInteger('productId');
            $table->date('orderDate');
            $table->float('orderTotal');
            $table->integer('quantityOrdered');
            $table->boolean('archived')->default(false);
            $table->dateTime('archived_at')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('customerId')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('productId')->references('id')->on('products')->onDelete('cascade');
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
