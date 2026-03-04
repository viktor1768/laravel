<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Collection;
	class ColController extends Controller {
		public function index()
		{
			$collection = collect([1, 2, 3,4,5,6,7,8,921,3,21,2,34,1]);
			$groups = $collection->split($collection->count()/2);
			dd([
				'average' => $groups,
				'collection' => $collection,
				'title' => 'Заголовок',
			]);
		}
	}
?>	
