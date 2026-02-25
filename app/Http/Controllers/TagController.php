<?php
	namespace App\Http\Controllers;
	class TagController extends Controller
	{
		public function alltag($text)
		{
			return view('components.tag-content', [
				'title' => 'title page',
				'text' => $text,
				'str' => '<b>text</b>',

			]);
		}
	}
?>	
