<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//id do usuario
            $table->string('name');//nome
            $table->string('email')->unique();//email que deve ser unico
            $table->timestamp('email_verified_at')->nullable();//verificador de email 
            $table->string('password');//senha
            $table->string('number')->unique();///numero que deve ser unico
            $table->string('city');//cidade
            $table->string('state');//estado
            $table->rememberToken();
            $table->timestamps();//data de criação de edição
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
