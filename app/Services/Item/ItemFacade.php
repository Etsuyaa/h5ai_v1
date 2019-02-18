<?php
namespace App\Services\Item;

use Illuminate\Support\Facades\Facade;

class ItemFacade extends Facade {
	protected static function getFacadeAccessor() {
		return Item::class;
	}
}