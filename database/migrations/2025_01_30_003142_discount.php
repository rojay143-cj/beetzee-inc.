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
        Schema::create('discount', function (Blueprint $table) {
            $table->id('id')->index('discount_id');
            $table->integer('percentage');
            $table->string('percent_name');
            $table->integer('limit');
            $table->timestamps();
        });
        DB::table('discount')->insert([
            [
                'id' => 1,
                'percentage' => 0,
                'limit' => 0,
                'percent_name' => '1st',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'percentage' => 7,
                'limit' => 20000,
                'percent_name' => '2nd',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'percentage' => 15,
                'limit' => 100000,
                'percent_name' => '3rd',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'percentage' => 20,
                'limit' => 500000,
                'percent_name' => '4th',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount');
    }
};
