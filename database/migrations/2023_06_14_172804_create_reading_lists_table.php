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
        Schema::create('reading_lists', function (Blueprint $table) {
            $table->bigIncrements('bookmark_id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('student_id');
            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reading_lists');
    }
};
