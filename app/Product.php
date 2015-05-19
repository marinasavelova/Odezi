<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
  
	public static function getValidationRules() {
    $validation = array(
      'name' => 'required',
      'category_id' => 'required',
      'subcategory_id' => 'required',
      'shop_id' => 'required',
      'brand_id' => 'required',
      'price' => 'required',
      'url' => 'required|url',
      'ean_code' => 'integer',
      'price' => 'regex:/^\d*(\.\d{2})?$/',
      'shipping_costs' => 'regex:/^\d*(\.\d{2})?$/',
    );
    return $validation;
	}

  protected $fillable = array(
		'name',
    'category_id',
    'subcategory_id',
    'sub_subcategory_id',
    'shop_id',
    'brand_id',
    'price',
    'shipping_costs',
    'shipping_duration_descr',
    'image',
    'description',
    'color',
    'ean_code',
    'url',
	);

	protected $guarded = array(
		'id',
	);
  
  public function category()
  {
    return $this->belongsTo('App\Category');
  }
  
  public function subcategory()
  {
    return $this->belongsTo('App\Category');
  }
  
  public function sub_subcategory()
  {
    return $this->belongsTo('App\Category');
  }
  
  public function shop()
  {
    return $this->belongsTo('App\Store');
  }
  
  public function brand()
  {
    return $this->belongsTo('App\Brand');
  }
  
}
