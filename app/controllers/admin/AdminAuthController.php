<?php

class AdminAuthController extends \BaseController {

	public function login()
	{
		return View::make('admin.pages.login');
	}

}
