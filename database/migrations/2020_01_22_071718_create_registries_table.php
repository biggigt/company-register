<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('registryTypeId');
            $table->integer('companyId');
            $table->date('c_date');
            $table->timestamps();
            $table->unique(['registryTypeId', 'companyId']);
        });
        DB::update("ALTER TABLE registries AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registries');
    }
}
