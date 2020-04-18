<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInRegistryStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_in_registry_statuses', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->bigInteger('registries_hsc_id');
            $table->integer('statuses_id');
            $table->string('countries_id');
            $table->string('act');
            $table->enum('state', ['active', 'deactivated']);
            $table->date('c_date');
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
        Schema::dropIfExists('company_in_registry_statuses');
    }
}
