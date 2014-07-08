<?php

class Post extends BaseModel {

	//========The db table this model relates to
    protected $table = 'posts';

    protected $imgDir = 'img-upload';

    //=========Validation rules for our model
    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required'
    ];

    public function user()
	{
	    return $this->belongsTo('User');
	}

	public function addUploadImage($image)
	{

		$systemPath = public_path() . '/' . $this->imgDir . '/';

		$imageName = $this->id . '-' . $image->getClientOriginalNAme();

		$image->move($systemPath, $imageName);

		$this->img_path = '/' . $this->imgDir . '/' . $imageName;
	}

	public function renderBody ()
	{
		$dirty_html = Parsedown::instance()->parse($this->body);
		$config = HTMLPurifier_Config::createDefault();
		$purifier = new HTMLPurifier($config);
		$clean_html = $purifier->purify($dirty_html);
		return $clean_html;
	}
}