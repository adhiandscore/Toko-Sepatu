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
        Schema::create('product_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('booking_trx_id')->constrained()->onDelete('cascade');
            $table->string('proof');
            $table->string('post_code');
            $table->string('city');
            $table->unsignedInteger('shoe_size');
            
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('grand_total_amount');
            $table->unsignedBigInteger('sub_total_amount');
            $table->unsignedBigInteger('discount_amount');
           
            $table->foreignId('promo_code_id')->nullable();
            $table->foreignId('shoe_id');
           
            $table->text('address');
           
            $table->boolean('is_paid');            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_transactions');
    }
};
