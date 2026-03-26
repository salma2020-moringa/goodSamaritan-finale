<?php
// database/migrations/2024_01_01_000005_create_content_pages_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentPagesTable extends Migration
{
    public function up()
    {
        Schema::create('content_pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('content')->nullable();
            $table->json('meta_data')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('content_pages');
    }
}