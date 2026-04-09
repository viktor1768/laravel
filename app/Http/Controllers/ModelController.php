<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use App\Http\Controllers\Controller;

	class ModelController extends Controller
	{
		public function index($order, $dir = 'desc')
		{
			$posts = Post::where('id','>', 30)->findOrFail(1);

			return view('components.model-content', ['posts'=> $posts]);
			
			
			
		}
	}
?>	
