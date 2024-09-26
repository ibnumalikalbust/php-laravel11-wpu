<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('testing_users', function (Blueprint $table) {
            $table->id();
            $table->string('unix')->unique();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            $table->timestamps();
            $table->softDeletesTz();
        });

        Schema::create('testing_category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
            $table->softDeletesTz();
        });

        Schema::create('testing_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('author');
            $table->foreign('author')->references('unix')->on('testing_users');
            $table->string('category');
            $table->foreign('category')->references('slug')->on('testing_category');
            $table->text('body');
            $table->timestampsTz();
            $table->softDeletesTz();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('testing_posts');
        Schema::dropIfExists('testing_users');
    }
};
