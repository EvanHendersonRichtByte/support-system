<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('id_ticket');
            $table->integer('user_id');
            $table->string('ticket_subject');
            $table->string('ticket_category')->nullable();
            $table->text('ticket_body');
            $table->string('priority')->nullable();
            $table->string('status')->nullable();
            $table->string('assigned_on')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
