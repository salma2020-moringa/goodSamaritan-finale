<?php
// database/migrations/2024_01_01_000002_create_children_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female']);
            $table->text('background_story')->nullable();
            $table->date('admission_date');
            $table->enum('status', ['active', 'transitioned', 'graduated'])->default('active');
            $table->string('photo')->nullable();
            $table->text('education_level')->nullable();
            $table->text('health_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('children');
    }
}