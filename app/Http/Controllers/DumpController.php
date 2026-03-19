<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB; 
	class DumpController extends Controller
	{
		public function dumparr()
		{
			DB::table('users')->where('age','>', 30)->update([
				'salary' => 500,
			]);
			$users = DB::table('users')->get();
			return view('components.dump-content', [
				'users' => $users,
				'titling' => 'page',
			]);
		}
	}
?>	
