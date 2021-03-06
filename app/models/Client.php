<?php

class Client extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    protected  $guarded = array('id');

    public function getCountry(){
        return $this->belongsTo('Country', 'country', 'id');
    }

    public function getOrderForms(){
        return $this->hasMany('OrderForm', 'client_id');
    }

    public function getProformaInvoice(){
        return $this->hasMany('OrderForm', 'client_id');
    }
}