<?php

class AdminAuthController extends \BaseController {

	public function login()
	{
		return View::make('admin.pages.login');
	}

	public function processLogin()
	{
		$input = Input::only('username', 'password');

		if (Auth::attempt([ 'username' => $input['username'], 'password' => $input['password'] ])) {
			return Redirect::route('admin.home');
		}

		return Redirect::back()->withError("Invalid admin information");
	}

	public function processLogout()
	{
		Auth::logout();

		return Redirect::route('admin.auth.login');
	}

}
