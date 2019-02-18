<?php

namespace App\Http\Controllers;
use Item;

class myh5aiController extends Controller {

	public function test($url) {

		$folders = Item::FindFolders($url);
		$files = Item::FindFiles($url);
		$links = explode('/', $url);

		return View('test', ['folders' => $folders, 'files' => $files, 'links' => $links]);
	}
	public function read($file) {

		$fp = fopen($file, "r");
		$text = fgets($fp, 255);
		fclose($fp);

		return View('read', ['text' => $text]);
	}

	public function home() {
		$url = substr(getcwd(), 0, -14);
		$folders = Item::FindFolders($url, 1);

		$files = Item::FindFiles($url, 1);

		return View('test', ['folders' => $folders, 'url' => $url, 'files' => $files]);
	}
}
