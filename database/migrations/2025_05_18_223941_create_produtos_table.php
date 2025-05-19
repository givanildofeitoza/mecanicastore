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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('situacao',20);
            $table->string('codigo',15);
            $table->string('referencia',30);
            $table->string('descricao',50);
            $table->string('descricaoComplementarstring',50);
            $table->string('unidade',3);
            $table->integer('codigotipo');
            $table->integer('codigoGrupo');
            $table->integer('codigoSubGrupo');
            $table->integer('codigoFabricante');
            $table->decimal('custo',8,2);
            $table->decimal('custGerencial',8,2);
            $table->decimal('custoMedio',8,2);
            $table->decimal('ultimoCusto',8,2);
            $table->decimal('precoVenda',8,2);
            $table->decimal('precoVendaFinanciamento',8,2);
            $table->decimal('ultimoPrecoVenda',8,2);
            $table->string('origem',2);
            $table->string('tributacao',2);
            $table->decimal('icms',8,2);
            $table->string('tributacaoIpi',2);
            $table->decimal('ipi',8,2);
            $table->string('tributacaoPis',2);
            $table->decimal('pis',8,2);
            $table->string('tributacaoCofins',2);
            $table->decimal('cofins',8,2);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos', function (Blueprint $table) {
            $table->dropColunm('id');
            $table->dropColunm('timestamps');
            $table->dropColunm('situacao');
            $table->dropColunm('codigo');
            $table->dropColunm('referencia');
            $table->dropColunm('descricao');
            $table->dropColunm('descricaoComplementar');
            $table->dropColunm('unidade');
            $table->dropColunm('codigotipo');
            $table->dropColunm('codigoGrupo');
            $table->dropColunm('codigoSubGrupo');
            $table->dropColunm('codigoFabricante');
            $table->dropColunm('custo');
            $table->dropColunm('custGerencial');
            $table->dropColunm('custoMedio');
            $table->dropColunm('ultimoCusto');
            $table->dropColunm('precoVenda');
            $table->dropColunm('precoVendaFinanciamento');
            $table->dropColunm('ultimoPrecoVenda');
            $table->dropColunm('origem');
            $table->dropColunm('tributacao');
            $table->dropColunm('icms');
            $table->dropColunm('tributacaoIpi');
            $table->dropColunm('ipi');
            $table->dropColunm('tributacaoPis');
            $table->dropColunm('pis');
            $table->dropColunm('tributacaoCofins');
            $table->dropColunm('cofins');
        });        
    }
};
