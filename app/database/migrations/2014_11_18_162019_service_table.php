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
		Schema::create('offices', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->string('email');
            $table->string('adress');
            $table->string('phone');
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
//        {
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
        Schema::drop('offices');
//		Schema::drop('services');
	}

}
