<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Add customer relation
            if (!Schema::hasColumn('bookings', 'customer_id')) {
                $table->foreignId('customer_id')->nullable()->constrained()->onDelete('cascade');
            }
            
            // Add service relation
            if (!Schema::hasColumn('bookings', 'service_id')) {
                $table->foreignId('service_id')->nullable()->constrained()->onDelete('cascade');
            }
            
            // Add service owner relation
            if (!Schema::hasColumn('bookings', 'service_owner_id')) {
                $table->foreignId('service_owner_id')->nullable()->constrained('users')->onDelete('set null');
            }
            
            // Add slot relation
            if (!Schema::hasColumn('bookings', 'slot_id')) {
                $table->foreignId('slot_id')->nullable()->constrained()->onDelete('cascade');
            }
            
            // Add booking source
            if (!Schema::hasColumn('bookings', 'source')) {
                $table->enum('source', ['manual', 'whatsapp', 'phone', 'app', 'website'])->default('manual');
            }
            
            // Add admin who created
            if (!Schema::hasColumn('bookings', 'created_by')) {
                $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            }
            
            // Update status enum
            if (Schema::hasColumn('bookings', 'status')) {
                $table->enum('status', ['draft', 'waiting_confirmation', 'confirmed', 'completed', 'cancelled'])->default('draft')->change();
            }
            
            // Add customer notes field
            if (!Schema::hasColumn('bookings', 'customer_notes')) {
                $table->text('customer_notes')->nullable();
            }
            
            // Add internal notes field
            if (!Schema::hasColumn('bookings', 'internal_notes')) {
                $table->text('internal_notes')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Drop foreign keys
            $table->dropForeign(['customer_id']);
            $table->dropForeign(['service_id']);
            $table->dropForeign(['service_owner_id']);
            $table->dropForeign(['slot_id']);
            $table->dropForeign(['created_by']);
            
            // Drop columns
            $table->dropColumn([
                'customer_id',
                'service_id', 
                'service_owner_id',
                'slot_id',
                'source',
                'created_by',
                'customer_notes',
                'internal_notes'
            ]);
        });
    }
};