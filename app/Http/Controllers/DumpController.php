<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB; 
	class DumpController extends Controller
	{
		public function dumparr()
		{
			$users = DB::table('users')->inRandomOrder()->take(1)->get();
			return view('components.dump-content', [
				'users' => $users,
				'titling' => 'page',
			]);
		}
	}
?>	
	