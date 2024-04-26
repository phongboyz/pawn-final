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
        Schema::create('pawn_details', function (Blueprint $table) {
            $table->id();
            $table->integer('pawn_id');
            $table->integer('apm_count');
            $table->date('apm_date');
            $table->decimal('apm_money',15,2)->default('0');
            $table->decimal('apm_int',15,2)->default('0');
            $table->decimal('apm_fees',15,2)->default('0');
            $table->date('pay_date')->nullable();
            $table->integer('expire_day')->default('0');
            $table->decimal('pay',15,2)->default('0');
            $table->decimal('int',15,2)->default('0');
            $table->decimal('fees',15,2)->default('0');
            $table->decimal('int_adj',15,2)->default('0');
            $table->decimal('discount',15,2)->default('0');
            $table->decimal('total',15,2)->default('0');
            $table->text('detail')->nullable();
            $table->text('image')->nullable();
            $table->char('status',8);
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pawn_details');
    }
};
