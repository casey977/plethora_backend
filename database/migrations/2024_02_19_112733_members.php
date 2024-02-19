<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('firstnames');
            $table->string('middlenames');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('joined');
            $table->string('last_payed');
            $table->timestamp('email_verified')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};