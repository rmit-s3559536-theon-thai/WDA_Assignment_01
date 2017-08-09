<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_informations', function (Blueprint $table) {
             $table->increments('id');

            /*
             * Other columns in the table
             */
            $table->string('fname');
            $table->string('lname');
            $table->string('studentno');
            $table->string('email');
            $table->timestamps();
        });

        Schema::table('ticket_details', function ($table) {
            $table->integer('ticket_id')->unsigned();
            $table->foreign('ticket_id')
                ->references('id')->on('ticket_details')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_informations');
    }
}
