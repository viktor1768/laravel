<?php
	namespace App\Http\Controllers;
	class DumpController extends Controller
	{
		public function dumparr()
		{
			return view('components.dump-content', [
				'title' => 'title page',
				'arr' => [1,2,3,4,5,6,7,8,9,0,10],


			]);
		}
	}
?>	
