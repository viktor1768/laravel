<?php
	namespace App\Http\Controllers;
	class TagController extends Controller
	{
		public function alltag($text)
		{
			return view('components.tag-content', [
				'title' => 'title page',
				'arr' => [1,2,3,4,5,6,7,8,9,10],
				'text' => $text,
				'employees' => [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000
		]
	    ],


			]);
		}
	}
?>	
