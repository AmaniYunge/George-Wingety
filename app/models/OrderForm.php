<?php

class OrderForm extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orderforms';
    protected  $guarded = array('id');
    public function Particular(){
        return $this->belongsToMany('Particular','orderform_particular','particular_id');
    }
    public function getClient(){
        return $this->belongsTo('Client', 'orderform_id', 'id');
    }



}