<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB; 
	class DumpController extends Controller
	{
		public function dumparr()
		{
			$users = DB::table('users')->get();
			$ids = DB::table('users')->insert([
				'name' => 'sdadsa',
				'email' => '231321sad',
				'age' => 15,
				'salary' => 21323,
				'password' => '2313dsfklnzc',
			]);
			return view('components.dump-content', [
				'users' => $users,
				'titling' => 'page',
			]);
		}
	}
?>	
