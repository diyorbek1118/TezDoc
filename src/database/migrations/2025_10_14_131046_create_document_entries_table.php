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
        Schema::create('document_entries', function (Blueprint $table) {
            $table->id();

            // Foreign keys
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('document_id');
            $table->unsignedBigInteger('user_id')->nullable();

            // JSON data field
            $table->json('data');

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('category_id')->references('id')->on('document_categories')->onDelete('cascade');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_entries');
    }
};
