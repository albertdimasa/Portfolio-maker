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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->date('date_start');
            $table->date('date_end')->nullable(); // JIKA NULL MAKA SAMPAI SEKARANG
            $table->string('title');
            $table->string('description');
            $table->string('category'); // EXP = Experience | EDC = Education
            $table->string('link_text');
            $table->boolean('is_link')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
