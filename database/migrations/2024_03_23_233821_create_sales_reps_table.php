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
        Schema::create('sales_reps', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 45);
            $table->string('lastName', 45);
            $table->string('email', 75);
            $table->integer('storeNumber');
            $table->boolean('archived')->default(false);
            $table->dateTime('archived_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_reps');
    }
};
