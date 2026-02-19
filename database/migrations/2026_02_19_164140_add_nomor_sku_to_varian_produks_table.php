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
    Schema::table('varian_produks', function (Blueprint $table) {
        $table->string('nomor_sku')->after('produk_id');
    });
}

public function down(): void
{
    Schema::table('varian_produks', function (Blueprint $table) {
        $table->dropColumn('nomor_sku');
    });
}

};
