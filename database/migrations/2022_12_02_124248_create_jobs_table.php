<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name')->nullable();
            $table->string('career_name')->nullable();
            $table->string('applicant_last_name')->nullable();
            $table->string('applicant_email')->nullable();
            $table->string('applicant_phone')->nullable();
            $table->text('applicant_cv')->nullable();
            $table->text('applicant_cover_letter')->nullable();
            $table->string('applicant_linkedin_url')->nullable();
            $table->string('applicant_portfolio_url')->nullable();
            $table->string('applicant_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
