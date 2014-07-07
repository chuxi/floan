<?php

class Project extends \Eloquent {
	protected $fillable = [
        'cid',
        'title',
        'amount',
        'rate',
        'expiration',
        'collected',
        'duration',
        'stime',
        'etime',
    ];

    protected $table = 'projects';

    protected $guarded = ['id'];



}