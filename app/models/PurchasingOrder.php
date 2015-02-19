<?php

class PurchasingOrder extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'purchasingOrder';

    protected  $guarded = array('id');
    public function particulars(){
        return $this->hasMany('Particulars', 'purchasingOrder_id', 'id');
    }
    public function client(){
        return $this->belongsTo('Client', 'purchasingOrder_id', 'id');
    }



}