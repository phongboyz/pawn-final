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
        Schema::create('socosts', function (Blueprint $table) {
            $table->id();
            $table->char('code',8);
            $table->string('name');
            $table->char('type',8);
            $table->decimal('total',15,2)->default('0');
            $table->text('detail')->nullable();
            $table->text('image')->nullable();
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->date('created_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socosts');
    }
};
