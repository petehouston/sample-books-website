<?php

class BookTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Book::create([
			'title' => "Python Data Analysis",
			'coverimg' => "https://www.packtpub.com/sites/default/files/3358OS_cov.jpg"
		]);;

		Book::create([
			'title' => "MongoDB Cookbook",
			'coverimg' => "https://www.packtpub.com/sites/default/files/1943OS_MongoDB%20Cookbook_0.jpg"
		]);

		Book::create([
			'title' => "Whatever",
			'coverimg' => "https://www.packtpub.com/sites/default/files/3358OS_cov.jpg"
		]);
	}

}
