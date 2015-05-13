<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$stores = Store::all();

		return view('admin.stores.index', compact('stores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.stores.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function postStore(/*Request $request*/)
	{ 
		//$country = new Store();
		//
		//$country->name = $request->input("name");
		//$country->save();
		$data = \Input::all();
		
		$validation = \Validator::make($data, Store::getValidationRules());
		if ($validation->fails()) {
			return \Redirect::back()->withErrors($validation)->withInput();
		}
		$country = Store::create($data);
		
		return redirect()->route('admin.stores.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$country = Store::findOrFail($id);

		return view('admin.stores.show', compact('country'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$country = Store::findOrFail($id);

		return view('admin.stores.edit', compact('country'));
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
		
		$validation = \Validator::make($data, Store::getValidationRules());
		if ($validation->fails()) {
			return \Redirect::back()->withErrors($validation)->withInput();
		}
		
		$country = Store::findOrFail($id);

		$country->name = $request->input("name");

		$country->save();

		return redirect()->route('admin.stores.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$country = Store::findOrFail($id);
		$country->delete();

		return redirect()->route('admin.stores.index')->with('message', 'Item deleted successfully.');
	}

}
