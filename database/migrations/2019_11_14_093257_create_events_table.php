<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_type_id')->unsigned();
            $table->integer('school_id')->unsigned();
            $table->date('date_start');
            $table->date('date_finish');
            $table->string('time_at');
            $table->string('time_until');
            $table->string('staff_name');
            $table->string('location');
            $table->string('notes');
            $table->boolean('is_done');

            $table->foreign('event_type_id')->references('id')->on('event_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('schools')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
