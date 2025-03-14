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
            $table->id();
            $table->string("project_name")->nullable();
            $table->longText("project_description")->nullable();
            $table->string("project_image_url")->nullable();
            $table->json("keywords")->nullable();
            $table->string("github_icon_url")->nullable();
            $table->string("google_play_icon_url")->nullable();
            $table->string("github_url")->nullable();
            $table->string("google_play_url")->nullable();
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
