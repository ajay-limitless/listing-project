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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('type');
            $table->string('category_id');
            $table->string('status')->default('Available');
            $table->decimal('price', 15, 2);
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->decimal('area', 10, 2);
            $table->decimal('lot_size', 10, 2)->nullable();
            $table->year('year_built')->nullable();
            $table->integer('parking')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('building_name')->nullable();
            $table->boolean('parking_spot')->default(false);
            $table->boolean('garden')->default(false);
            $table->boolean('garage')->default(false);
            $table->string('garage_size')->default(false);
            $table->json('features')->nullable();
            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->json('amenities')->nullable();
            $table->json('security_features')->nullable();
            $table->string('security_type')->nullable();
            $table->json('service_charges')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
