<?php
	namespace App\Http\Controllers;
	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\Message;

	class ControlController extends Controller
	{
		public function index(Request $request)
		{
			if($request->has('name') && $request->has('message')) {
			$message = new Message();
			$message -> name = $request->name;
			$message -> message = $request->$message;
			$message->save();
				
			}


			$messages = Message::orderBy('created_at', 'desc')->get();
			return view('components.control-content', ['title'=> 'Гостевая книга','message' => $messages]);
		}
	}
?>	