<?php

class TestController extends MyController {

	public function getIndex()
	{
		return $this->layout->nest('main','hello');
	}

}
