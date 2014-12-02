<?php namespace Angel\Search;

use App, View, Config;

class SearchController extends \Angel\Core\AngelController {
	
	function search()
	{
		// Query
		$this->data['q'] = Input::get('q');
		if($this->data['q']) {
			// Search
			$this->data['results'] = $this->global_search($this->data['q']);
		}
		
		// Return
		return View::make('search::search',$this->data);
	}
}