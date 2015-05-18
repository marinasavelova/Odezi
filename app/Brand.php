<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {
  public $timestamps = false;
 
	public static function getValidationRules() {
    $validation = array(
      'name' => 'required',
    );
    return $validation;
	}
  
  protected $fillable = array(
		'name',
	);

	protected $guarded = array(
		'id',
	);

}
