<?php
namespace App\Services\Item;

use Illuminate\Support\ServiceProvider;

class ItemServiceProvider extends ServiceProvider {

	public function register() {
		$this->app->singleton('Item', function ($app) {
			return new Item();
		});
	}

}