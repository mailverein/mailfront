<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailboxes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 256);
            $table->text('password');
            $table->integer('enabled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mailboxes');
    }
}
