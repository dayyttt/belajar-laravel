<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            // Tambah kolom yang belum ada
            if (!Schema::hasColumn('payments', 'payment_method_detail')) {
                $table->string('payment_method_detail')->nullable();
            }
            
            if (!Schema::hasColumn('payments', 'processed_by')) {
                $table->foreignId('processed_by')->nullable()->constrained('users')->onDelete('set null');
            }
            
            if (!Schema::hasColumn('payments', 'proof_file')) {
                $table->string('proof_file')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign(['processed_by']);
            $table->dropColumn(['payment_method_detail', 'processed_by', 'proof_file']);
        });
    }
};