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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->char('type',5);
            $table->string('name',50);
            $table->integer('muad_id');
            $table->integer('cate_id');
            $table->string('unit',50)->nullable();
            $table->string('location',200)->nullable();
            $table->text('note')->nullable();
            $table->text('image')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
