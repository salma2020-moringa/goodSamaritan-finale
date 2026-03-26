<?php
// database/migrations/2024_01_01_000004_create_volunteers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('skills')->nullable();
            $table->string('availability')->nullable();
            $table->string('location')->nullable();
            $table->enum('status', ['pending', 'active', 'inactive'])->default('pending');
            $table->text('interests')->nullable();
            $table->integer('hours_contributed')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
}