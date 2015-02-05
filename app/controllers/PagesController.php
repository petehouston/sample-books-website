<?php

class PagesController extends \BaseController {

	public function home()
	{
		$books = Book::all();
		return View::make('pages.home')->with('books', $books);
	}

}
