<?php

namespace Main;

use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\PluginTask;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class MainTask extends PluginTask {

	public $seccond = 10;
	
	public function onRun($tick) {
		$this->seccond--;
		if($this->seccond == 5) {
			foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p) {
			$p->sendMessage("Còn 5 giây");
 		}
	}

	if($this->seccond == 4) {
		foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p) {
		$p->sendMessage("Còn 4 giây");
		}
	}

	if($this->seccond == 3) {
		foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p) {
		$p->sendMessage("Còn 3 giây");
		}
	}

	if($this->seccond == 2) {
		foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p) {
		$p->sendMessage("Còn 2 giây");
		}
	}
	
	if($this->seccond == 1) {
		foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p) {
		$p->sendMessage("Còn 1 giây");
		}
	}

	if($this->seccond == 0) {
		foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p) {
		$this->getOwner()->getServer()->getScheduler()->cancelTask($this->getTaskId());
	}
}
}
}
