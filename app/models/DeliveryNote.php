<?php

class DeliveryNote extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'deliverynotes';

    protected  $guarded = array('id');
    public function particulars(){
        return $this->hasMany('Particulars', 'deliverynote_id', 'id');
    }

}