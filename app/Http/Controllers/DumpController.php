<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB; 
	class DumpController extends Controller
	{
		public function dumparr()
		{
			$users = DB::table('users')->whereBetween('age', [20,30])->OrWhereBetween('salary',[15000,30000])->OrWhere('id','>',4)->get();
			return view('components.dump-content', [
				'users' => $users,
				'titling' => 'page',
			]);
		}
	}
?>	
	