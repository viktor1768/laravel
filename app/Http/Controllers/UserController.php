<?php
	namespace App\Http\Controllers;
	class UserController extends Controller
	{
		public function all($name,$surname)
		{
			return view('post.show-layout', [
				'title' => 'title page',
				'name'  => $name,
                'surname' => $surname,
			]);
		}
	}
?>
