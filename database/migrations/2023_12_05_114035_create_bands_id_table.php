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
        Schema::create('albums', function (Blueprint $table) {
            $table->unsignedBigInteger('band_id')->nullable();

            $table->foreign('band_id')->references('id')->on('bands');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->dropForeign(['band_id']);
            $table->dropColumn('band_id');
        });
    }
};
