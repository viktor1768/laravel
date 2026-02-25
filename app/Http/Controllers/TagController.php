<?php
	namespace App\Http\Controllers;
	class TagController extends Controller
	{
		public function alltag($age)
		{
			return view('components.tag-content', [
				'title' => 'title page',
				'age' => $age,

			]);
		}
	}
?>	
