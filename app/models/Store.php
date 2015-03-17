<?php

class Store extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'store';

    protected  $guarded = array('id');

    public function bincard(){
        return $this->belongsTo('Bincard', 'store_id', 'id');
    }
    public function particulars(){
        return $this->hasMany('Particular', 'proformainvoice_id', 'id');
    }


}