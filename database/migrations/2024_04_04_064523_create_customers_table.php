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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('count_sv');
            $table->char('gender',5);
            $table->string('name',50);
            $table->string('lname',50)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('address',200)->nullable();
            $table->integer('vill_id');
            $table->string('dis_name',50);
            $table->string('pro_name',50);
            $table->text('detail')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
