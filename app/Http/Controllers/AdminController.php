<?php
	namespace App\Http\Controllers;
	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\Message;

	class AdminController extends Controller
	{
		public function index(Request $request)
		{


			$messages = Message::orderBy('created_at', 'desc')->get();
			return view('components.admin-content', ['title'=> 'Гостевая книга','message' => $messages]);
		}
		public function delete(Request $request, $id){
			$messages = Message::find($id);
			$messages->delete();

			$messages_out = Message::orderBy('created_at', 'desc')->get();
			return view('components.admin-content',['title'=> 'Гостевая книга','message' => $messages_out]);
		}
		public function edit(Request $request, $id){
			$message = Message::find($id);
			if ($request->has('submit')){
				$message->name = $request->name;
				$message->message = $request->message;
				$message->save();
			}

			return view('components.edit-content',['message' => $message]);
			
		}
	}
?>	