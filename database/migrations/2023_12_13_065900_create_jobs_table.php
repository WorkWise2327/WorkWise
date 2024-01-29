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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("name")->nullable();
            $table->string("image")->nullable();
            $table->string("tag")->nullable();
            $table->text("description")->nullable();
            $table->string("salary")->nullable();
            $table->text("requirement")->nullable();
            $table->text("apply")->nullable();
            $table->foreign('name')->references('company')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
