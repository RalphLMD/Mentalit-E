<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('ticketSubject');
            $table->string('ticketCategory');
            $table->string('ticketDescription');
            $table->string('file')->nullable();
            $table->string('ticketStatus')->default('Open');
            $table->dateTime('dateTimeIssued');
            $table->dateTime('dateTimeUpdated')->nullable();
            $table->dateTime('dateTimeResolved')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
