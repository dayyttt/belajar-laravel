<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained('service_categories');
            $table->text('description')->nullable();
            $table->integer('duration')->comment('Duration in minutes');
            $table->decimal('base_price', 12, 2);
            $table->enum('price_unit', ['session', 'hour', 'day'])->default('session');
            $table->boolean('is_active')->default(true);
            $table->integer('display_order')->default(0);
            $table->foreignId('owner_id')->constrained('users');
            $table->string('image_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
