<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOptionStore extends Model {

  public $timestamps = false;
  protected $table = 'payment_option_store';
  
  protected $fillable = array(
		'store_id',
    'payment_option_id',
	);

	protected $guarded = array(
		'id',
	);
  
  public function paymentoption()
  {
    return $this->belongsTo('App\PaymentOption');
  }
}
