<?php
// database/migrations/2024_01_01_000001_create_donations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('transaction_id')->unique();
            $table->decimal('amount', 10, 2);
            $table->enum('type', ['one_time', 'monthly'])->default('one_time');
            $table->enum('status', ['pending', 'completed', 'failed', 'refunded'])->default('pending');
            $table->string('payment_method')->nullable();
            $table->string('currency', 3)->default('USD');
            $table->text('notes')->nullable();
            $table->json('payment_details')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donations');
    }
}