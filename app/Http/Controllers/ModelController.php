<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use App\Http\Controllers\Controller;

	class ModelController extends Controller
	{
		public function index($order, $dir = 'desc')
		{
			$posts = Post::where('id','>', 0)->orderBy($order, $dir)->get();

			return view('components.model-content', ['posts'=> $posts]);
			
			
		}
	}
?>	
