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
    Schema::table('izin', function (Blueprint $table) {
        $table->text('alasan_ditolak')->nullable()->after('status');
    });
}

public function down()
{
    Schema::table('izin', function (Blueprint $table) {
        $table->dropColumn('alasan_ditolak');
    });
}

};
