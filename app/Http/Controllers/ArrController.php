<?php
	namespace App\Http\Controllers;
	class ArrController extends Controller
	{
		public function allarr()
		{
			return view('components.arr-content', [
				'title' => 'title page',
				'arr' => ['text','text2','text3'],


			]);
		}
	}
?>	
