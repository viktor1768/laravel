<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Collection;
	class ColController extends Controller {
		public function index()
		{
			$collection = collect([
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 100],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Door', 'price' => 100],]);
	$filtered = $collection->where('price', 100);

			dd([
				'average' => $filtered,
				'collection' => $collection,
				'title' => 'Заголовок',
			]);
		}
	}
?>	
