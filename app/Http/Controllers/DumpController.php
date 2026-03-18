<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB; 
	class DumpController extends Controller
	{
		public function dumparr()
		{
			$posts = DB::table('posts')->where('likes', '>' ,200)->get();
			return view('components.dump-content', [
				'posts' => $posts,
				'titling' => 'page',
			]);
		}
	}
?>	
