<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->foreignId('role_id')->constrained()->onDelete('cascade');
      $table->string('username');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('phone_number');
      $table->dateTime('is_email_verified')->nullable();
      $table->text('profile_picture')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('users');
  }
};
