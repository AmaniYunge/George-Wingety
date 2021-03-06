<?php

class Particular extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'particulars';

    protected  $guarded = array('id');
    public function proformaInvoice(){
        return $this->hasMany('ProformaInvoice');
    }
//    public function invoice(){
//        return $this->belongs('Invoice', 'particulars_id', 'id');
//    }
    public function getOrderForm(){
        return $this->belongsToMany('OrderForm');
    }

//    public function purchasingForm(){
//        return $this->belongs('PurchasingForm', 'particulars_id', 'id');
//    }
//    public function requisitionForm(){
//        return $this->belongs('RequisitionForm', 'particulars_id', 'id');
//    }




}