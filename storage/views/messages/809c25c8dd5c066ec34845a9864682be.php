<?php namespace App\Http\Controllers;

class IndexController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		return view('admin.index');
	}
	
	public function changeLang($locale=null){

        \LaravelGettext::setLocale($locale);
        return \Redirect::to(\URL::previous());

    }
}
