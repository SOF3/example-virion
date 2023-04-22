<?php

namespace SOFe\ExampleVirion;

use pocketmine\plugin\Plugin;

final class HelloWorld {
	public static function info(Plugin $plugin) : void {
		$plugin->getLogger()->info("hello world from virion");
	}
}
