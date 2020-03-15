<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInRegistryHarmonizedCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_in_registry_harmonized_codes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('registries_id');
            $table->bigInteger('harmonizedcs_id');
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
        Schema::dropIfExists('company_in_registry_harmonized_codes');
    }
}
