<?php

use App\Models\Designer;
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
        Schema::create('file_managers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path');
            $table->string('public_path')->nullable();
            $table->string('ext');
            $table->enum('type', ['image', 'video', 'document']);
            $table->bigInteger('size');

            $table->foreignIdFor(Designer::class)->nullable()->constrained()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_managers');
    }
};
