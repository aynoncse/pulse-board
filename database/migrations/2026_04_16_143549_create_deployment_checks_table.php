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
        Schema::create('deployment_checks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->boolean('is_passed')->default(false);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->timestamp('checked_at')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deployment_checks');
    }
};
