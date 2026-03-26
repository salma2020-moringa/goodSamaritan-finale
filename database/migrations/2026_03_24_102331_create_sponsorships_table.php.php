<?php
// database/migrations/2024_01_01_000003_create_sponsorships_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorshipsTable extends Migration
{
    public function up()
    {
        Schema::create('sponsorships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('child_id')->constrained()->onDelete('cascade');
            $table->decimal('monthly_amount', 10, 2);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->enum('status', ['active', 'paused', 'ended'])->default('active');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sponsorships');
    }
}