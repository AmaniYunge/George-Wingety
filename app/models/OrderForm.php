<?php

class OrderForm extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orderForms';

    protected  $guarded = array('id');
    public function getParticulars(){
        return $this->$this->hasMany('Particulars');
    }
    public function getClient(){
        return $this->belongsTo('Client', 'orderForm_id', 'id');
    }



}