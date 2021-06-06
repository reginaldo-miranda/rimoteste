<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasitensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendasitens', function (Blueprint $table) {
            $table->id();
            $table->integer('id_venda');
            $table->integer('id_cliente');
            $table->integer('id_produto');
            $table->double('qde');
            $table->double('valorunit');
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
        Schema::dropIfExists('vendasitens');
    }
}
