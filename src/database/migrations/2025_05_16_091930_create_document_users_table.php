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
        Schema::create('document_users', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('document_id');

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('document_id')->references('id')->on('document')->onDelete('cascade');
            $table->timestamps();

            $table->primary(['users_id', 'document_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_users');
    }
};
