<?php
	namespace App\Http\Controllers;
	class TagController extends Controller
	{
		public function alltag($text)
		{
			return view('components.tag-content', [
				'title' => 'title page',
				'arr' => [1,2,3,4],
				'text' => $text,

			]);
		}
	}
?>	
