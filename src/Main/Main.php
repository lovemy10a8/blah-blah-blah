<?php

namespace Main;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {
  public function onCommand(CommandSender $s, Command $cmd, $label, array $args) {
      if($cmd->getName() == "batdau") {
    $this->getServer()->getScheduler()->scheduleRepeatingTask(new MainTask($this), 20);
        return true;
}
}
}
