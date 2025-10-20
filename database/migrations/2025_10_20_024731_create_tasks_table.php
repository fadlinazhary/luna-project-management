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
        Schema::create('tasks', function (Blueprint $table) {
            $status = ['to do', 'in progress', 'finished'];
            $priorities = ['low', 'medium', 'high'];

            $table->id();
            $table->string('name');
            $table->text('description');
            $table->enum('status', $status);
            $table->enum('priority', $priorities)->nullable();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->dateTime('start_date');
            $table->datetime('due_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
