<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 255);
            $table->string('area', 255);
            $table->string('address', 255)->nullable();
            $table->string('work_location', 255)->nullable();
            $table->string('job_title', 255)->nullable();
            $table->text('access')->nullable();
            $table->string('employment_type', 255)->nullable();
            $table->text('job_description')->nullable();
            $table->string('salary', 255)->nullable();
            $table->text('working_hours', 255)->nullable();
            $table->text('recruitment_conditions')->nullable();
            $table->text('holidays')->nullable();
            $table->string('application_method', 255)->nullable();
            $table->string('interview_location', 255)->nullable();
            $table->string('receptionist', 255)->nullable();
            $table->string('application_contact', 255)->nullable();
            $table->string('image_path', 255)->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
