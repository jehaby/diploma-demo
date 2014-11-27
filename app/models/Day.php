<?php


class Day extends Eloquent {

    protected $fillable = ['start', 'end', 'break_start', 'break_end'];

    public function schedules()
    {
        return $this->belongsToMany('Schedule');
    }

}