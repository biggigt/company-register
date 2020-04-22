<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistryTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registry_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('registryType');
            $table->string('registryDescription');
            $table->timestamps();
        });
        DB::update("ALTER TABLE registry_types AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registry_types');
    }
}
