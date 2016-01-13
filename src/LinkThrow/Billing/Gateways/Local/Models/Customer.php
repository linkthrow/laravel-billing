<?php namespace LinkThrow\Billing\Gateways\Local\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Customer extends Model
{
    use SoftDeletingTrait;
    protected $connection = 'billinglocal';
    protected $guarded = array('id');
    
    public function coupon()
    {
        return $this->belongsTo('LinkThrow\Billing\Gateways\Local\Models\Coupon');
    }
    
    public function cards()
    {
        return $this->hasMany('LinkThrow\Billing\Gateways\Local\Models\Card');
    }
    
    public function invoices()
    {
        return $this->hasMany('LinkThrow\Billing\Gateways\Local\Models\Invoice');
    }
    
    public function subscriptions()
    {
        return $this->hasMany('LinkThrow\Billing\Gateways\Local\Models\Subscription');
    }
    
    public function charges()
    {
        return $this->hasMany('LinkThrow\Billing\Gateways\Local\Models\Charge');
    }
}
