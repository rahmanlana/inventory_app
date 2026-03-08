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
        // Mengecek apakah kolom 'nomor_sku' BELUM ada, baru menambahkannya
        if (!Schema::hasColumn('varian_produks', 'nomor_sku')) {
            Schema::table('varian_produks', function (Blueprint $table) {
                $table->string('nomor_sku')->after('produk_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Mengecek apakah kolom 'nomor_sku' ADA, baru menghapusnya
        if (Schema::hasColumn('varian_produks', 'nomor_sku')) {
            Schema::table('varian_produks', function (Blueprint $table) {
                $table->dropColumn('nomor_sku');
            });
        }
    }
};