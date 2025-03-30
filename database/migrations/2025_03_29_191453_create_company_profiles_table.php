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
    Schema::create('company_profiles', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Nama perusahaan
        $table->text('description'); // Deskripsi
        $table->string('address')->nullable(); // Alamat
        $table->string('phone')->nullable(); // Telepon
        $table->string('email')->nullable(); // Email
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
