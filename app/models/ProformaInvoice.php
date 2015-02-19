<?php

class ProformaInvoice extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proformaInvoice';

    protected  $guarded = array('id');

    public function invoice(){
        return $this->belongsTo('Invoice', 'proformaInvoice_id', 'id');
    }
    public function particulars(){
        return $this->hasMany('Particulars', 'proformaInvoice_id', 'id');
    }
    public function client(){
        return $this->belongsTo('Client', 'proformaInvoice_id', 'id');
    }



}