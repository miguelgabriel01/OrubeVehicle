<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();//id do veiculo
            $table->string('model');
            $table->string('color',20);//cor do veiculo
            $table->string('owners',20);//numero de propietarios do veiculo
            $table->string('type',20);//tipo do veiculo
            $table->string('value',20);//valor 
            $table->string('km',50);//km rodados
            $table->text('description');//descrição 

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();//hora e data de criação e edição
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
