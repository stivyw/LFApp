<?php

class TestController extends BaseController {

	public function missingMethod(){
		die('missing');
	}
	public function getIndex()
	{
		die('index');
		return View::make('hello');
	}

}
