<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model {
  
	public static function getValidationRules() {
    $validation = array(
      'name' => 'required',
      'url' => 'url',
    );
    return $validation;
	}
  
  protected $fillable = array(
		'name',
    'url',
    'img',
    'country_id',
	);

	protected $guarded = array(
		'id',
	);
  
  public function country()
  {
    return $this->belongsTo('App\Country');
  }
  
  public function paymentoptionstore()
  {
    return $this->belongsToMany('App\PaymentOption');
  }

  public function deliverystore()
  {
    return $this->belongsToMany('App\Country', 'delivery_store');
  }
  
  public function getListPaymentOption()
  {
    $paymentoption = array();
    foreach($this->paymentoptionstore as $paymentoptionstore){
      $paymentoption[] = $paymentoptionstore->name;
    }
    return implode($paymentoption, " / ");
  }
  
  public function getListDelivery()
  {
    $delivery = array();
    foreach($this->deliverystore as $deliverystore){
      $delivery[] = $deliverystore->name;
    }
    return implode($delivery, " / ");
  }
  
}
