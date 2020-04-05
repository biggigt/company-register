<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('business_type');
            $table->string('name');
            $table->string('regnumber');
            $table->string('okpo')->nullable();
            $table->integer('facility_type');
            $table->string('address');
            $table->integer('subject_acting');
            $table->integer('subject_owner');
            $table->timestamps();
            $table->foreign('business_type')->references('id')->on('business_types');
            $table->foreign('facility_type')->references('id')->on('facility_types');
            $table->foreign('subject_acting')->references('id')->on('subjects');
            $table->foreign('subject_owner')->references('id')->on('subjects');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
