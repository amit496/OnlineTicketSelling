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
        Schema::create('api_users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->default('text');
            $table->string('email', 100)->nullable()->default('text');
            $table->string('url', 100)->nullable()->default('text');

            $table->tinyInteger('numbers')->nullable()->default(0); 

            $table->string('status', 100)->nullable()->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_users');
    }
};
