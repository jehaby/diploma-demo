<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedules', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 50);
			$table->timestamps();
		});

		Schema::create('offices', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->string('email');
            $table->string('adress');
            $table->string('phone');
			$table->integer('schedule_id')->unsigned();
			$table->foreign('schedule_id')->references('id')->on('schedules');
            $table->timestamps();
		});

		Schema::create('days', function(Blueprint $table)
		{
			$table->increments('id');
			$table->time('start');
			$table->time('end');
			$table->time('break_start');
			$table->time('break_end');
			$table->timestamps();
		});

		Schema::create('day_schedule', function(Blueprint $table)
		{
			$table->integer('schedule_id')->unsigned();
			$table->foreign('schedule_id')->references('id')->on('schedules');
			$table->integer('day_id')->unsigned();
			$table->foreign('day_id')->references('id')->on('days');
			$table->tinyInteger('day_of_week')->unsigned(); // day of the week, from 1 to 7. 1 -- Monday, 2 -- Tuesday, .. etc
			$table->unique(['schedule_id', 'day_id', 'day_of_week']);
			$table->timestamps();
		});


//        Schema::create('users', function(Blueprint $table)  // administrators, managers, clients
//        {
//            $table->increments('id');
//            $table->string('name');
//            $table->string('phone');
//            $table->string('email');
//            $table->boolean('trusted');   // only for client
//            $table->integer('successful_records', false, true);   // only for client
//            $table->integer('unsuccessful_records', false, true);  // only for client
//            $table->integer('office_id', false, true);   // only for staff
//            $table->enum('type', ['client', 'manager', 'admin']);
//            $table->timestamps();
//
//        });
//
//        Schema::create('services', function(Blueprint $table)
//        {
//
//        });
//
//        Schema::create('office_service', function(Blueprint $table)
//        {
//
//        });
//
//        Schema::create('', function(Blueprint $table)
//        {pp
//
//        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('day_schedule');
		Schema::drop('offices');
		Schema::drop('schedules');
		Schema::drop('days');

//		Schema::drop('services');
	}

}
