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
        Schema::create('deleted_order_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderId');
            $table->unsignedBigInteger('customerId');
            $table->unsignedBigInteger('productId');
            $table->date('orderDate');
            $table->float('orderTotal');
            $table->integer('quantityOrdered');
            $table->boolean('archived')->default(false);
            $table->dateTime('archived_at')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('orderId')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('customerId')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('productId')->references('id')->on('products')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deleted_order_logs');
    }
};
