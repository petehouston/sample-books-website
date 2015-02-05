<?php

class AdminPagesController extends \BaseController {

	public function home()
	{
		$books = Book::all();
		return View::make('admin.pages.home')->withBooks($books);
	}

}
