<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use App\Http\Controllers\Controller;

	class ModelController extends Controller
	{
		public function index($number)
		{
			$posts = Post::find($number);

			return view('components.model-content', ['posts'=> $posts]);
			
			
		}
	}
?>	
