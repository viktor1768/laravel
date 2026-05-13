<?php
	namespace App\Http\Controllers;
	use App\Models\Post;
	use App\Models\Thumbnail;
	use App\Models\Contry;
	use App\Models\City;
	use App\Models\User;
	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;

	class ModelController extends Controller
	{
		public function index(Request $request)
		{


			$messages = Message::orderBy('created_at', 'desc')->get();
			return view('components.admin-content', ['title'=> 'Гостевая книга','message' => $messages]);
		}
		public function city(Request $request, $id){
			$messages = Message::find($id);
			$messages->delete();

			$messages_out = Message::orderBy('created_at', 'desc')->get();
			return view('components.admin-content',['title'=> 'Гостевая книга','message' => $messages_out]);
		}
		public function landmark(){
			$landmark = landmark::orderBy($id);

			return view('components.landmark-content',['message' => $message]);
			
		}
	}
?>	