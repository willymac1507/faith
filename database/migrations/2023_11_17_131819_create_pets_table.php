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
            $table->text('sex')->nullable(false);
            $table->integer('age_years');
            $table->integer('age_months');
            $table->string('status');
            $table->date('date_registered')->nullable(false);
            $table->date('date_reserved')->nullable(true);
            $table->date('date_adopted')->nullable(true);
            $table->boolean('prefs_children')->nullable(false);
            $table->boolean('prefs_teens')->nullable(false);
            $table->boolean('prefs_dogs')->nullable(false);
            $table->boolean('prefs_cats')->nullable(false);
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
