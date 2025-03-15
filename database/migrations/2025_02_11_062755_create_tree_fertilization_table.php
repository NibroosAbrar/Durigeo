<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tree_fertilization', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tree_id')->constrained('trees')->onDelete('cascade');
            $table->date('tanggal_pemupukan');
            $table->string('nama_pupuk');
            $table->enum('jenis_pupuk', ['Organik', 'Anorganik']);
            $table->string('bentuk_pupuk');
            $table->decimal('dosis_pupuk', 8, 2);
            $table->enum('unit', ['kg', 'g', 'ml', 'l']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tree_fertilization');
    }
};
