<?php

namespace Main;

use pocketmine\utils\TextFormat as T;
use pocketmine\utils\Config;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\level\Position;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		if ($sender->isOp()) {
			switch($command->getName()) {
				case "vip":
				case "addvip":
					$name = $player->getName();
					if (isset($args[0])){
						if(is_null($this->plugin->getServer()->getPlayer($args[0]))){
							$sender->sendMessage("That's not an player!");
							return true;
						} else {
							if(!$this->plugin->isVip($args[0])){
								array_push($this->plugin->vips, $args[0]);
								$sender->sendMessage("The player is now VIP!");
								return true;
						} else {
							$sender->sendMessage("That player is already a VIP!");
							return true;
						}
					}
				}
			}
		}
	}
}
