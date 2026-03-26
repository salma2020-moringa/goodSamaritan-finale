<?php
// database/migrations/2024_01_01_000000_add_fields_to_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->enum('role', ['admin', 'staff', 'donor', 'sponsor', 'volunteer'])->default('donor');
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_login_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'address', 'country', 'role', 'is_active', 'last_login_at']);
        });
    }
}