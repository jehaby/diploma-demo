<?php


class Schedule extends Eloquent{


    public function offices()
    {
        return $this->hasMany('Office');
    }

    public function days()
    {
        return $this->belongsToMany('Day');
    }

}