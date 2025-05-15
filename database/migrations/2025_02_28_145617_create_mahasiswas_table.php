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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('student_id')->unique();
            $table->string('gender');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('religion');
            $table->string('blood_type');
            $table->string('nationality');
            $table->string('province');
            $table->string('city');
            $table->string('village');
            $table->string('neighborhood_association');
            $table->string('community_association');
            $table->string('full_address');
            $table->string('postal_code');
            $table->string('phone_number');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
        Schema::dropIfExists('personal_information');
    }
};
