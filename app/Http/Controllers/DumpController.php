<?php
	namespace App\Http\Controllers; 
	
    use App\Models\Post;
    use App\Http\Controllers\Controller;
	class DumpController extends Controller
	{
		public function dumparr()
		{
			$post = Post::all(); 
			return view('components.dump-content', [
				'posts' => $post,
				'titling' => 'page',
			]);
		}
	}
	//test commnet for ssh
?>	
