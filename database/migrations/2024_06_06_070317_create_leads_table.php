 n<?php

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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('user_id')->nullable();
            $table->string('property_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('preferred_contact_method')->nullable();
            $table->string('property_type')->nullable();
            $table->string('location')->nullable();
            $table->decimal('budget_min', 10, 2)->nullable();
            $table->decimal('budget_max', 10, 2)->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->string('source')->nullable();
            $table->string('campaign')->nullable();
            $table->string('status')->default('New');
            $table->string('priority')->default('Medium');
            $table->text('notes')->nullable();
            $table->date('next_followup_date')->nullable();
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->foreign('assigned_to')->references('id')->on('staff')->onDelete('set null');
            $table->enum('lead_type',['property','marketing'])->default('property');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
