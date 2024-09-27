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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');  // ID unik untuk setiap pengguna
            $table->string('nama');  // Nama pengguna
            $table->string('email')->unique();  // Email yang unik
            $table->string('password');  // Password untuk autentikasi
            $table->enum('role', ['admin', 'member'])->default('member');  // Peran pengguna
            $table->enum('status', ['active', 'inactive'])->default('active');  // Status pengguna
            $table->timestamp('email_verified_at')->nullable();  // Kolom untuk verifikasi email
            $table->string('remember_token')->nullable();  // Tambahkan kolom ini untuk menyimpan token ingatan
            $table->timestamps();  // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
