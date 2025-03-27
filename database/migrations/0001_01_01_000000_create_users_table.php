<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->index('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('agreement')->nullable();
            $table->enum('subscription', ['Subscribe', 'Unsubscribe'])->default('Unsubscribe');
            $table->foreignId('role_id')->nullable();
            $table->string('email')->unique();
            $table->string('number')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('profile_img')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
            'role_id' => '1001',
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@gmail.com',
            'number' => '1234567890',
            'address' => 'Admin Address',
            'password' => bcrypt('123'),
            ]
        ]);

        Schema::create('role', function(Blueprint $table){
            $table->id()->index('role_id');
            $table->string('role_name')->unique();
            $table->string('description');
            $table->timestamps();
        });

        DB::table('role')->insert([
            [
                'id' => '1002',
                'role_name' => 'Member',
                'description' => 'Paid User'
            ],
            [
                'id' => '1001',
                'role_name' => 'Admin',
                'description' => 'Owner'
            ],
        ]);

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('role');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
