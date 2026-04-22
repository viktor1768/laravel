<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use App\Models\Thumbnail;
	use App\Models\Contry;
	use App\Models\City;
	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;

	class ModelController extends Controller
	{
		public function index()
		{
			$posts = Post::find(1)->get();
			$thumbnails = Thumbnail::find(1)->get();
			$contrys = Contry::all();
			$citys = City::all();
			return view('components.model-content', ['posts'=> $posts, 'thumbnails' => $thumbnails, 'contrys' => $contrys, 'citys' => $citys]);
		}
	}
?>