<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use App\Http\Controllers\Controller;

	class ModelController extends Controller
	{
		public function index()
		{
			$posts = Post::where('id','>', 0)->oldest('create_post')->get();

			return view('components.model-content', ['posts'=> $posts]);
			
			
		}
	}
?>	
