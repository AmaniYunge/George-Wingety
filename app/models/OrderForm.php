<?php

class OrderForm extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orderForm';

    protected  $guarded = array('id');
    public function particulars(){
        return $this->hasMany('Particulars', 'orderForm_id', 'id');
    }
    public function client(){
        return $this->belongsTo('Client', 'orderForm_id', 'id');
    }



}