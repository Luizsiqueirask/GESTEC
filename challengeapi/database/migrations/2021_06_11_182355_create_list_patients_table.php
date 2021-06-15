<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_patients', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nome');
            $table->string('data_nascimento');
            $table->string('telefone');
            $table->string('tem_comorbidades');
            $table->string('vacinado_covid19');
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
        Schema::dropIfExists('list_patients');
    }
}
