<?php

class Post extends Eloquent {
    protected $fillable = array('title', 'content');

    public static $rules = array();
}