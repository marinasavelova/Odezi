<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryStore extends Model {

  public $timestamps = false;
  protected $table = 'delivery_store';
  
  protected $fillable = array(
		'store_id',
    'country_id',
	);

	protected $guarded = array(
		'id',
	);
  
  public function country()
  {
    return $this->belongsTo('App\Country');
  }
}
