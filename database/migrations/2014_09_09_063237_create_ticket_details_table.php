<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_details', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('os');
            $table->string('issue');
            $table->string('status');

            $table->timestamps();
        });

        Schema::table('comments', function ($table) {
            $table->integer('ticket_details_id')->unsigned();
            $table->foreign('ticket_details_id')
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
        Schema::dropIfExists('ticket_details');
    }
}
