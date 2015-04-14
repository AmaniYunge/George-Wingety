<?php

class ProformaInvoice extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proformainvoices';

    protected  $guarded = array('id');

//    public function invoice(){
//        return $this->belongsTo('Invoice', 'proformaInvoice_id', 'id');
//    }
    public function getParticulars(){
        return $this->belongsToMany('Particular');
    }
    public function getPIParticulars(){
        return $this->belongsToMany('ProformaInvoiceParticular');
    }
    public function getClient(){
        return $this->belongsTo('Client', 'proformainvoice_id', 'id');
    }



}