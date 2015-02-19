<?php

class DeliveryNote extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'deliveryNote';

    protected  $guarded = array('id');
    public function particulars(){
        return $this->hasMany('Particulars', 'deliveryNote_id', 'id');
    }

}