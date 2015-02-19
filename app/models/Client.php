<?php

class Client extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'client';

    protected  $guarded = array('id');

    public function countries(){
        return $this->belongsTo('Country', 'country', 'id');
    }
}