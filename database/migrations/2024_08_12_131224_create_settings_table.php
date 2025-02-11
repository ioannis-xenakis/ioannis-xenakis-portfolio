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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("first_english_name")->nullable();
            $table->string("first_greek_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("about_me_description")->nullable();
            $table->string("job_title")->nullable();
            $table->string("location")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string("languages")->nullable();
            $table->date("birth_date")->nullable();
            $table->string("github_url")->nullable();
            $table->string("stack_overflow_url")->nullable();
            $table->string("linkedin_url")->nullable();
            $table->string("google_play_url")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
