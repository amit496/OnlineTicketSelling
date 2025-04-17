<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enum\ApiUser\ApiUserEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('api_users', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('url', 100)->nullable();

            $table->tinyInteger('status')->nullable()->default(ApiUserEnum::ACTIVE->value);
            $table->string('password')->nullable();

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
