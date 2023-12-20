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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id_ketua');
            $table->unsignedBigInteger('user_id_wakil');
            $table->text('visi');
            $table->text('misi');
            $table->text('program_kerja');
            $table->text('experience');
            $table->timestamps();

            $table->foreign('user_id_ketua')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id_wakil')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
