<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PaymentOption;
use Illuminate\Http\Request;

class PaymentOptionController extends Controller {

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
		$paymentoptions = PaymentOption::all();

		return view('admin.paymentoptions.index', compact('paymentoptions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.paymentoptions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	//public function store(Request $request)
	//{
	//	$paymentoption = new PaymentOption();
	//
	//	$paymentoption->name = $request->input("name");
	//
	//	$paymentoption->save();
	//
	//	return redirect()->route('admin.paymentoptions.index')->with('message', 'Item created successfully.');
	//}
	
	public function postStore(/*Request $request*/)
	{ 
		$data = \Input::all();
		
		$validation = \Validator::make($data, PaymentOption::getValidationRules());
		if ($validation->fails()) {
			return Redirect::back()->withErrors($validation)->withInput();
		}
		$paymentoption = PaymentOption::create($data);
		
	  $file = \Input::file('img');
		
		if (\Input::hasFile('img')) {
			$dir = '/uploads/paymentoptions/';
			$filename = date('ymd').$_FILES['img']['name'];
			
			\Input::file('img')->move(public_path().$dir, $filename);
			
			$paymentoption->img = $dir.$filename;
		}
		
		$paymentoption->save();
		
		return redirect()->route('admin.paymentoptions.index')->with('message', 'Item created successfully.');
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$paymentoption = PaymentOption::findOrFail($id);

		return view('admin.paymentoptions.show', compact('paymentoption'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$paymentoption = PaymentOption::findOrFail($id);

		return view('admin.paymentoptions.edit', compact('paymentoption'));
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
		
		$validation = \Validator::make($data, PaymentOption::getValidationRules());
		if ($validation->fails()) {
			return \Redirect::back()->withErrors($validation)->withInput();
		}
		
		$paymentoption = PaymentOption::findOrFail($id);

		$paymentoption->name = $request->input("name");
		
	  $file = \Input::file('img');
		
		if (\Input::hasFile('img')) {
			$dir = '/uploads/paymentoptions/';
			$filename = date('ymd').$_FILES['img']['name'];
			
			\Input::file('img')->move(public_path().$dir, $filename);
			
			$paymentoption->img = $dir.$filename;
		}
		
		$paymentoption->save();
		
		return redirect()->route('admin.paymentoptions.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$paymentoption = PaymentOption::findOrFail($id);
		$paymentoption->delete();

		return redirect()->route('admin.paymentoptions.index')->with('message', 'Item deleted successfully.');
	}

}
