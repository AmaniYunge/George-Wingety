<?php

class PurchasingOrder extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'purchasingorders';

    protected  $guarded = array('id');
    public function particulars(){
        return $this->hasMany('Particular', 'purchasingorder_id', 'id');
    }
    public function client(){
        return $this->belongsTo('Client', 'purchasingorder_id', 'id');
    }



}