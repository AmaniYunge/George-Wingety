<?php

class Bincard extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bincard';

    protected  $guarded = array('id');

    public function particulars(){
        return $this->hasMany('Particulars', 'bincard_id', 'id');
    }


}