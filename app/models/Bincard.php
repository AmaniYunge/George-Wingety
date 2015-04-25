<?php

class Bincard extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bincards';

    protected  $guarded = array('id');

    public function particulars(){
        return $this->hasMany('Particular');
    }


}