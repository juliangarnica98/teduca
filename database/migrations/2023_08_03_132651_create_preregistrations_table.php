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
        Schema::create('preregistrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date_interest')->nullable();
            $table->string('complete_names')->nullable();
            $table->string('full_last_names')->nullable();
            $table->string('document_types')->nullable();
            $table->double('document_number')->nullable();
            $table->date('expedition_date')->nullable();
            $table->string('place_document')->nullable();
            $table->double('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->string('academic_program')->nullable();
            $table->text('academic_interest')->nullable();
            $table->boolean('status')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preregistrations');
    }
};
