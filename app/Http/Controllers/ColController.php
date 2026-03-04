<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Collection;
	class ColController extends Controller {
		public function index()
		{
			$collection = collect([1, 2, 3,4,5,6,7,8,921,3,21,2,34,1]);
			$diff = $collection->diff([1,2,3,4,8,1]);
			dd([
				'average' => $diff,
				'collection' => $collection,
				'title' => 'Заголовок',
			]);
		}
	}
?>	
