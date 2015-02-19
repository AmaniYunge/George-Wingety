<?php

class RequisitionForm extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'requisitionForm';

    protected  $guarded = array('id');
    public function particulars(){
        return $this->hasMany('Particulars', 'requisitionForm_id', 'id');
    }
    public function client(){
        return $this->belongsTo('Client', 'requisitionForm_id', 'id');
    }



}