<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->text('notes')->nullable();
            $table->json('preferences')->nullable(); // For storing preferences and special requirements
            $table->timestamps();
            $table->softDeletes();
            
            $table->index(['name', 'email', 'phone']);
        });

        // Update bookings table to reference customers
        Schema::table('bookings', function (Blueprint $table) {
            $table->foreignId('customer_id')->after('id')->nullable()->constrained('customers');
        });
    }

    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->dropColumn('customer_id');
        });
        
        Schema::dropIfExists('customers');
    }
};