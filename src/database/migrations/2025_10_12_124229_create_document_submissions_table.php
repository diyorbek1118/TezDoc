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
        Schema::create('document_submissions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('document_id')->constrained('documents');
        $table->foreignId('user_id')->nullable()->constrained('users');
        $table->string('doc_name');
        $table->string('full_name');
        $table->date('date')->nullable();
        $table->string('passport')->nullable();
        $table->string('phone')->nullable();
        $table->json('extra_data')->nullable();
        $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_submissions');
    }
};
