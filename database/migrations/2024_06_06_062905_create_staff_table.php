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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('role');
            $table->string('department')->nullable();
            $table->string('employee_id')->unique();
            $table->date('hire_date')->nullable();
            $table->string('status')->default('Active');
            $table->decimal('salary', 10, 2)->nullable();
            $table->decimal('commission_rate', 5, 2)->nullable();
            $table->timestamp('last_login')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('remember_token')->nullable();
            $table->string('profile_picture')->nullable();
            $table->text('bio')->nullable();
            $table->json('social_links')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->json('permissions')->nullable();
            $table->text('notes')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('emergency_contact_relationship')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
