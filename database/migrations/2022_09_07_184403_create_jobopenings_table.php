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
        Schema::create('jobopenings', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('city');
            $table->string('department');
            $table->string('language_required');
            $table->string('job_title');
            $table->string('job_description');
            $table->string('requirements');
            $table->string('salary');
            $table->string('start_date');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobopenings');
    }
};
