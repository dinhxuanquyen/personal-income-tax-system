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
        Schema::table('income_sources', function (Blueprint $table) {
            // Thêm cột 'description' sau cột 'name', có thể null
            $table->text('description')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('income_sources', function (Blueprint $table) {
            // Xóa cột 'description' khi rollback
            $table->dropColumn('description');
        });
    }
};