<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('category')->nullable(false);
            $table->text('description')->nullable(false);
            $table->integer('age_years');
            $table->integer('age_months');
            $table->string('status');
            $table->date('date_registered')->nullable(false);
            $table->date('date_reserved')->nullable(true);
            $table->date('date_adopted')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
