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
        Schema::create('internal_pages', function (Blueprint $table) {
            $table->id();
            $table->boolean('visibility')->nullable()->default(true);
            $table->string('file_path');
            $table->string('heading_text', 255)->nullable()->default('text');
            $table->string('paragraph_text', 255)->nullable()->default('text');
            $table->string('banner')->nullable()->default('text');
            $table->bigInteger('block_id')->unsigned()->index()->nullable();
            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internal_pages');
    }
};
