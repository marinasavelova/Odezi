<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$deliveries = Delivery::all();

		return view('admin.deliveries.index', compact('deliveries'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.deliveries.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function postStore(/*Request $request*/)
	{ 
		$data = \Input::all();
		
		$validation = \Validator::make($data, Delivery::getValidationRules());
		if ($validation->fails()) {
			return \Redirect::back()->withErrors($validation)->withInput();
		}
		$delivery = Delivery::create($data);
		
		return redirect()->route('admin.deliveries.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$delivery = Delivery::findOrFail($id);

		return view('admin.deliveries.show', compact('delivery'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$delivery = Delivery::findOrFail($id);

		return view('admin.deliveries.edit', compact('delivery'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$data = \Input::all();
		
		$validation = \Validator::make($data, Delivery::getValidationRules());
		if ($validation->fails()) {
			return \Redirect::back()->withErrors($validation)->withInput();
		}
		
		$delivery = Delivery::findOrFail($id);

		$delivery->name = $request->input("name");

		$delivery->save();

		return redirect()->route('admin.deliveries.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$delivery = Delivery::findOrFail($id);
		$delivery->delete();

		return redirect()->route('admin.deliveries.index')->with('message', 'Item deleted successfully.');
	}

}
