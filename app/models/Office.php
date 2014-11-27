<?php


class Office extends Eloquent {

//
//    public function staff()
//    {
//
//    }
//
//    public function clients()
//    {
//
//    }

    public function schedule()
    {
        return $this->belongsTo('Schedule');
    }

} 