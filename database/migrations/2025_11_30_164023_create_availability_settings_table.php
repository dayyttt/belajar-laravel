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
        Schema::create('availability_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_owner_id')->constrained()->onDelete('cascade');
            $table->foreignId('service_id')->nullable()->constrained()->onDelete('cascade');
            $table->enum('day_of_week', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);
            $table->time('opening_time');
            $table->time('closing_time');
            $table->integer('slot_duration_minutes')->default(30);
            $table->integer('break_duration_minutes')->default(0);
            $table->time('break_start_time')->nullable();
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('availability_settings');
    }
};
