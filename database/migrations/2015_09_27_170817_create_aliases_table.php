<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAliasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliases', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('localpart', 256);
            $table->integer('enabled');
            $table->integer('mailboxid')->unsigned();
            $table->foreign('mailboxid')->references('id')->on('mailboxes');
            $table->integer('domainid')->unsigned();
            $table->foreign('domainid')->references('id')->on('domains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aliases');
    }
}
