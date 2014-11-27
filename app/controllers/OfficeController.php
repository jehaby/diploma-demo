<?php

class OfficeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // if manager then redirect to 2
        $offices = Office::all();

		return View::make('admin.offices', compact('offices'));
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	// if manager then redirect to 2
        return View::make('admin.office_create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
//         if manager then redirect to 2

//		return d(Input::all());

		$schedule = new Schedule();
		$schedule->title = Input::get('title') . 'расписание';
		$schedule->save();

        $office = new Office();
        $office->title = Input::get('title');
        $office->adress = Input::get('adress');
        $office->phone = Input::get('phone');
        $office->email = Input::get('email');
		$office->schedule()->associate($schedule);   // $office->schedule_id = $schedule->id;
        $office->save();

		foreach(range(1, 7) as $i) {
			if (!Input::has('isdayoff' . $i)) {

				$times = preg_replace_callback('/^(\d{1,2})(\.5)?(?:,\s?)(\d{1,2})(\.5)?/',
					function ($m) {
						return "$m[1]:" . ($m[2] ? '30' : '00') . "|$m[3]:" . (isset($m[4]) ? '30' : '00');
					}, Input::get('day' . $i));

				list($start_time, $end_time) = explode('|', $times);

				$day = Day::firstOrCreate(['start' => $start_time, 'end' => $end_time]);
				$schedule->days()->save($day, ['day_of_week' => $i]);
			}
		}

//		$schedule->days()->saveMany($days);

		d(Input::all());

		return Redirect::action('OfficeController@index');
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        // if manager then redirect to 2
		//
		return Redirect::action('OfficeController@edit', $id);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$office = Office::findOrFail($id);
        return View::make('admin.office_edit')->with('office', $office);
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
