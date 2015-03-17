<?php

class Invoice extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invoices';

    protected  $guarded = array('id');
    public function proformaInvoice(){
        return $this->hasMany('ProformaInvoice', 'invoice_id', 'id');
    }
    public function particulars(){
        return $this->hasMany('Particular', 'invoice_id', 'id');
    }
    public function client(){
        return $this->belongsTo('Client', 'invoice_id', 'id');
    }



}