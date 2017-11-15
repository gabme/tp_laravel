<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersAddColums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('users', 'nombre', 'apellido', 'telefono', 'email', 'usuario', 'password')) {
        Schema::table('users',function(Blueprint $table) {
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('usuario');
            $table->string('password');
            $table->rememberToken();
        });
       } //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       if (Schema::hasColumn ('users', 'revenue')) {
        Schema::table('users',function(Blueprint $table){
                $table->dropColumn('revenue');
            });
        } //
    }
}