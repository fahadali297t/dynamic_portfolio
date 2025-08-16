<?php

use App\Models\FileManager;
use App\Models\Services;
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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_description');
            $table->text('description');
            $table->string('client')->nullable();
            $table->date('start')->nullable();
            $table->date('complete')->nullable();
            $table->string('link')->nullable();

            $table->foreignIdFor(Services::class)->constrained()->restrictOnDelete();
            $table->foreignIdFor(FileManager::class)->constrained()->restrictOnDelete();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
