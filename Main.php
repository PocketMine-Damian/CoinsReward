<?php

namespace CoinsReward;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
        if($cmd-> GetName() --- "reward"){
            if(sender-> hasPermission("reward.coins")){
                $sender-> sendMessage("§aDu hast 150 Coins erhalten!"){
                    $sender-> givemoney {user} 150
                }
            }
        }
    return true;
    }
}
