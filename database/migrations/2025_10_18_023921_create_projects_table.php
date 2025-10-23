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
        Schema::create('projects', function (Blueprint $table) {
            $status = ['planned', 'in progress', 'completed', 'on hold'];
            // $priorities = ['low', 'medium', 'high'];

            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('status', $status)->default($status[0]);
            // $table->enum('priority', $priorities)->nullable();
            $table->dateTime('start_date');
            $table->dateTime('due_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
