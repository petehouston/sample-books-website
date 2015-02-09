<?php

class AdminBookManagementController extends \BaseController {

	public function showAddForm()
	{
		return View::make('admin.pages.add');
	}

	public function postAddForm()
	{
		$input = Input::only('title', 'coverimg');

		$book = Book::where('title', $input['title']);
		if ($book) {
			return Redirect::back()->withMessage("Book already added");
		}

		$book = Book::create([
			'title' => $input['title'],
			'coverimg' => $input['coverimg']
		]);

		if (!$book) {
			return Redirect::back()->withError("Problem occurred while adding new book. Please try again.");
		}

		return Redirect::back()->withMessage('Book added successfully');		
	}

	public function showEditForm($id)
	{
		$book = Book::find($id);
		if (!$book) {
			return Redirect::back()->withError("Book not found.");
		}

		return View::make('admin.pages.edit')->withBook($book);
	}

	public function putEditForm($id)
	{
		$book = Book::find($id);
		if (!$book) {
			return Redirect::back()->withError("Book not found.");
		}

		$input = Input::only('title', 'coverimg');

		$book->title = $input['title'];
		$book->coverimg = $input['coverimg'];
		$book->save();

		return Redirect::back()->withMessage('Book added successfully');
	}

	public function processDelete($id)
	{
		$book = Book::find($id);
		if (!$book) {
			return Redirect::back()->withError("Book not found.");
		}

		$book->delete();

		return Redirect::back()->withMessage('Book deleted successfully');
	}

}
