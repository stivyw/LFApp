<?php

class TestController extends BaseController {

	public function getIndex()
	{
		return $this->layout->nest('main','hello');
	}

}
