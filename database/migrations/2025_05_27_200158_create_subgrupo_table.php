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
        Schema::create('subgrupo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('subgruponome',30);
            $table->integer('idgrupo');
            $table->integer('filial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('subgrupo', function (Blueprint $table) {
            $table->dropColunm('subgruponome');
            $table->dropColunm('idgrupo');
            $table->dropColunm('filial');
        });
    }
};
