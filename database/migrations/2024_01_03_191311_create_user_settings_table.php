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
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->string('email', 50)->unique();
            $table->string('theme_name',50)->nullable();
            $table->unsignedTinyInteger('header_color')->default(0)->comment('1 to 8');
            $table->unsignedTinyInteger('sidebar_color')->default(0)->comment('1 to 8');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_settings');
    }
};
