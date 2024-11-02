<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // User's full name
            $table->string('email')->unique(); // User's email address
            $table->timestamp('email_verified_at')->nullable(); // Timestamp for email verification
            $table->string('password'); // User's password
            $table->string('phone')->nullable(); // User's phone number
            $table->enum('role', ['admin', 'user'])->default('user'); // Role of the user (admin or regular user)
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
