<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trans_hitory', function (Blueprint $table) {
            $table->id()->index('trans_hitory_id');
            $table->foreignId('expense_id');
            $table->string('receipt_img')->nullable();
            $table->string('ref_num')->nullable()->unique();
            $table->integer('amount');
            $table->string('status');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_hitory');
    }
};
