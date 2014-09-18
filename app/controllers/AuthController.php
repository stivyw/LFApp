<?php

class AuthController extends MyController {

	public function getIndex()
	{	
		$this->layout->title .= 'Auth';
		return $this->layout->nest('main','hello');
	}
	public function getLogin()
	{
		$this->layout->title .= 'Auth';
		return $this->layout->nest('main','loginForm');
	}
	public function postLogin(){
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
 

        if(Auth::attempt($userdata)) 
        {
            return Redirect::to('auth/index');
        }else{
            return Redirect::to('auth/login');
        }
		$this->layout->title .= 'Auth';
		return $this->layout->nest('main','loginForm');
	}
	public function getLogout(){
		!Auth::guest() && Auth::logout();
		return Redirect::to('auth/login');

	}

}
