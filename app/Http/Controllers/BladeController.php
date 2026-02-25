<?php
	namespace App\Http\Controllers;
	class BladeController extends Controller
	{
		public function allblade($text)
		{
			return view('components.blade-content', [
				'title' => 'title page',
				'location' => ['country'=>'Sweden','city'=>'Omsk'],
				'text' => $text,

			]);
		}
	}
?>	
