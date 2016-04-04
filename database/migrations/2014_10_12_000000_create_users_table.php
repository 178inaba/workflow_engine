<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $tabke->string('company_id', 64)->index();
            $table->string('system_name', 64);
            $table->string('name', 255);
            $table->string('email', 255);
            $table->tinyInteger('authority');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // primary
            $table->unique(['company_id', 'system_name']);
            $table->unique(['company_id', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
