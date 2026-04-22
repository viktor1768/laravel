<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;

	class ModelController extends Controller
	{
		public function index()
		{
			$posts = Post::find(1)->get();

			return view('components.model-content', ['posts'=> $posts]);
		}
	}
?>