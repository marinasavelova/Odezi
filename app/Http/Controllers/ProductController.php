<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

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
		$products = Product::all();

		return view('admin.products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.products.create');
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

		$validation = \Validator::make($data, Product::getValidationRules());
		if ($validation->fails()) {
			return \Redirect::back()->withErrors($validation)->withInput();
		}
		$product = Product::create($data);
		
		$file = \Input::file('image');
		
		if (\Input::hasFile('image')) {
			$dir = '/uploads/products/';
			$filename = date('image').$_FILES['image']['name'];
			
			\Input::file('image')->move(public_path().$dir, $filename);
			
			$product->image = $dir.$filename;
		}
		$product->save();
		
		return redirect()->route('admin.products.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product = Product::findOrFail($id);

		return view('admin.products.show', compact('product'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::findOrFail($id);

		return view('admin.products.edit', compact('product'));
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

		$validation = \Validator::make($data, Product::getValidationRules());
		if ($validation->fails()) {
			return \Redirect::back()->withErrors($validation)->withInput();
		}
		
		$product = Product::findOrFail($id);

		$product->fill($data);
		
		$file = \Input::file('image');
		
		if (\Input::hasFile('image')) {
			$dir = '/uploads/products/';
			$filename = date('image').$_FILES['image']['name'];
			
			\Input::file('image')->move(public_path().$dir, $filename);
			
			$product->image = $dir.$filename;
		}
		
		$product->save();

		return redirect()->route('admin.products.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$product = Product::findOrFail($id);
		$product->delete();

		return redirect()->route('admin.products.index')->with('message', 'Item deleted successfully.');
	}
	
	public function category()
	{
		$select = \Form::select('subcategory_id', [null=>'choose subcategory'], null, array('class' => 'form-control'));
		if(!empty($_GET['id'])){
			$subcategories = \App\Category::where('parent_id', $_GET['id'])->lists('name','id');
		  $select = \Form::select('subcategory_id', [null=>'choose subcategory'] + $subcategories, null, array('class' => 'form-control'));
		}

		return $select;
	}

}
