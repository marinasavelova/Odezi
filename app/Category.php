<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
  public $timestamps = false;
 
	public static function getValidationRules() {
    $validation = array(
      'name' => 'required',
    );
    return $validation;
	}
  
  protected $fillable = array(
		'name',
    'parent_id',
	);

	protected $guarded = array(
		'id',
	);
  
  public function parentcategory()
  {
    return $this->belongsTo('App\Category', 'parent_id');
  }
  

}
