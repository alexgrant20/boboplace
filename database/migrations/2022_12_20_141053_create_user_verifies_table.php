<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('user_verifies', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->onUpdate('cascade');
      $table->string('token');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('user_verifies');
  }
};