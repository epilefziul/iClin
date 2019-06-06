<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarPacient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Foto')->nullable();
            $table->string('Nome');
            $table->string('Cpf');
            $table->string('Rg');
            $table->string('Telefone-p');
            $table->string('Data');
            $table->string('sexo');
            $table->string('estado');
            $table->string('Email');
            $table->string('escola');
            $table->string('profi');
            $table->string('Cep');
            $table->string('Uf');
            $table->string('cidade');
            $table->string('Endereco');
            $table->string('Bairro');
            $table->integer('Numero');
            $table->string('Complemento')->nullable();
            $table->string('Parente')->nullable();
            $table->string('Parentent-tele')->nullable();
            $table->string('Parente-1')->nullable();
            $table->string('Parentent-tele-1')->nullable();
            $table->string('convenio');
            $table->string('Plano');
            $table->string('Inscricao');
            $table->string('Validade');
            $table->string('cor');
            $table->string('Peso');
            $table->string('Altura');
            $table->string('rh');
            $table->string('tipo');
            $table->string('radioH');
            $table->longtext('Chere');
            $table->string('radioD');
            $table->longtext('CDiab')->nullable();
            $table->string('radioHI');
            $table->longtext('Chiper')->nullable();
            $table->string('radioT');
            $table->longtext('Cclini')->nullable();
            $table->string('radioC');
            $table->longtext('Cdoen')->nullable();
            $table->string('radioN');
            $table->longtext('Cneopla')->nullable();
            $table->string('radioFA');
            $table->longtext('Cfarma')->nullable();
            $table->string('radioDRO');
            $table->longtext('Cuso')->nullable();
            $table->string('radioAL');
            $table->longtext('Calerg')->nullable();
            $table->string('radioET');
            $table->longtext('Cetili')->nullable();
            $table->string('radioVA');
            $table->longtext('Cvacina')->nullable();
            $table->string('radioCI');
            $table->longtext('Ccirur')->nullable();
            $table->string('radioTRA');
            $table->longtext('Cporta')->nullable();
            $table->string('radioMAR');
            $table->longtext('Cmarca')->nullable();
            $table->string('radioEP');
            $table->longtext('Ceplis')->nullable();
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
        //
    }
}
