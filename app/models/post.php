<?php

class Post extends BaseModel {

	//========The db table this model relates to
    protected $table = 'posts';

    //=========Validation rules for our model
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required'
    ];
}