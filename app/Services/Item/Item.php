<?php
namespace App\Services\Item;

class Item {

	public $size;
	public $name;
	public $type;
	public $lastmodif;
	public $icone;
	public $item_path;

	public function ReadFile($file) {

		if ((file_exists($file)) && (is_readable($file))) {
			$text = file_get_contents($file);

		}
		return $text;

	}

	public function FindFolders($url, $option = 0) {
		if ($option == 0) {
			$path = substr(getcwd(), 0, -14) . $url;
		} else {
			$path = $url;
		}

		$folders = array();

		$objects = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path), \RecursiveIteratorIterator::CATCH_GET_CHILD);

		foreach ($objects as $name => $object) {
			if (basename($name) != "." && basename($name) != ".." && is_dir($name)) {
				$item = new Item();
				if ($option == 0) {
					$item->item_path = $url . "/";
				} else {
					$item->item_path = "";
				}

				$item->name = basename($name);
				$item->size = filesize($name);

				$infos = mime_content_type($name);
				$infos2 = explode("/", $infos);
				if (array_key_exists("1", $infos2)) {
					$item->type = $infos2[1];
				} else {
					$item->type = $infos2[0];
				}
				$item->icone = $infos2[0];

				$item->lastmodif = date("M d Y H:i", filemtime($name));
				array_push($folders, $item);
				//echo "<br>" . basename($name) . "<br>";
			}
		}

		return $folders;

	}

	public function FindFiles($url, $option = 0) {
		if ($option == 0) {
			$path = substr(getcwd(), 0, -14) . $url;
		} else {
			$path = $url;
		}
		$files = array();
		$objects = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path), \RecursiveIteratorIterator::CATCH_GET_CHILD);

		foreach ($objects as $name => $object) {
			if (basename($name) != "." && basename($name) != ".." && is_file($name)) {
				$item = new Item();
				$item->item_path = $name;
				$item->name = basename($name);
				$item->size = filesize($name);

				$infos = mime_content_type($name);
				$infos2 = explode("/", $infos);
				if (array_key_exists("1", $infos2)) {
					$item->type = $infos2[1];
				} else {
					$item->type = $infos2[0];
				}
				$item->icone = $infos2[0];

				$item->lastmodif = date("M d Y H:i", filemtime($name));
				array_push($files, $item);
				//echo "<br>" . basename($name) . "<br>";
			}
		}
		return $files;

	}

}