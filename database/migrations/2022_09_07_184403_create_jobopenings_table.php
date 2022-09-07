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
            $table->varchar('country');
            $table->varchar('city');
            $table->varchar('industry');
            $table->varchar('language);
            $table->varchar('job_title');
            $table->varchar('job_descriptiontext');
            $table->varchar('requirements');
            $table->varchar('salary');
            $table->varchar('start_date');
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
