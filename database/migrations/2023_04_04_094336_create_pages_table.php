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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug', 100)->nullable()->default('');
            $table->string('meta_title');
            $table->string('meta_desc');
            $table->boolean('status')->nullable()->default(true);
            $table->dateTime('publish_time');
            // $table->timestamps();
            // $table->timestamp('publish_time');
            // $table->dateTime('publish_time')->nullable()->default(new DateTime());
            $table->boolean('homepage')->nullable()->default(false);
            $table->boolean('navigation')->nullable()->default(true);
            $table->boolean('exact_url')->nullable()->default(true);
            $table->string('rules', 255)->nullable()->default('view');
            $table->boolean('theme')->nullable()->default(0);
            $table->boolean('parent_page')->nullable()->default(false);
            $table->string('page_type', 15)->nullable()->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
