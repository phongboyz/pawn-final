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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->char('code',5);
            $table->string('name',50);
            $table->string('tel',20)->nullable();
            $table->string('address',200)->nullable();
            $table->string('location',200)->nullable();
            $table->string('sig1',50)->nullable();
            $table->string('sig2',50)->nullable();
            $table->string('sig3',50)->nullable();
            $table->string('sig4',50)->nullable();
            $table->text('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
