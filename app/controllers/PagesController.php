<?php

class PagesController extends \BaseController {

	public function home()
	{
		$books = Book::all();
		return View::make('pages.home')->with('books', $books);
	}

	public function search()
	{
		return View::make('pages.search');
	}

	public function postSearch()
	{
		$title = Input::get('title');

		$books = Book::whereRaw('title like "%'.$title.'%"')->get();

		return View::make('pages.search')->withBooks($books);
	}

}
