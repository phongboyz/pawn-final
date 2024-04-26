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
        Schema::create('pawns', function (Blueprint $table) {
            $table->id();
            $table->char('code',8);
            $table->integer('product_id');
            $table->integer('cus_id');
            $table->integer('crc_id');
            $table->decimal('rate',15,2)->default('0');
            $table->decimal('money',15,2)->default('0');
            $table->string('money_name');
            $table->decimal('interest',15,2)->default('0');
            $table->decimal('balance',15,2)->default('0');
            $table->decimal('balance_int',15,2)->default('0');
            $table->char('interestType',8);
            $table->decimal('pay_money',15,2)->default('0');
            $table->decimal('pay_int',15,2)->default('0');
            $table->decimal('adj_percent',15,2)->default('0');
            $table->decimal('adj_money',15,2)->default('0');
            $table->decimal('fees_percent',15,2)->default('0');
            $table->decimal('fees_money',15,2)->default('0');
            $table->decimal('discount',15,2)->default('0');
            $table->text('detail');
            $table->char('status',8);
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('count_date');
            $table->date('created_date');
            $table->date('expire_date');
            $table->integer('count_expire_date')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pawns');
    }
};
