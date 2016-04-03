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
            $table->string('company_id', 64);
            $table->string('id', 64);
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->tinyInteger('authority');
            $table->rememberToken();
            $table->timestamps();

            // primary
            $table->primary(['company_id', 'id']);
            $table->unique(['company_id', 'email']);

            // foreign key
            $table->foreign('company_id')->references('id')->on('companies');
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
