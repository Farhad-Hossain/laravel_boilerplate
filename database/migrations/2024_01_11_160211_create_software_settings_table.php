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
        Schema::create('software_settings', function (Blueprint $table) {
            $table->id();
            $table->string('org_name', 191)->nullable();
            $table->string('logo', 191)->nullable();
            $table->date('established_date')->nullable();
            $table->text('description')->nullable();
            $table->string('email', 50)->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_settings');
    }
};