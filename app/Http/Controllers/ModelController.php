<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use App\Http\Controllers\Controller;

	class ModelController extends Controller
	{
		public function index()
		{
			$posts = Post::where('id', '>', 1)->orderBy('title','desc')->take(5)->get();

			return view('components.model-content', ['posts'=> $posts]);
			
		}
	}
?>	
