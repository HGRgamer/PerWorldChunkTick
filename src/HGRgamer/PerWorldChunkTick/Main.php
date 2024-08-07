<?php

declare(strict_types=1);

namespace HGRgamer\PerWorldChunkTick;

use pocketmine\event\Listener;
use pocketmine\event\world\WorldLoadEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\world\World;

class Main extends PluginBase implements Listener
{

    private int $defaultTickRadius = 4;

    /** @var int[] */
    private array $worldTickRadius = [];


    public function onEnable(): void
    {
        $this->saveDefaultConfig();

        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->init();
    }

    private function init(): void
    {
        $this->defaultTickRadius = max(0, (int) $this->getConfig()->get("default-tick-radius", 3));
        $this->worldTickRadius = $this->getConfig()->get("world-tick-radius", []);

        //default world and worlds loaded by other plugins
        foreach ($this->getServer()->getWorldManager()->getWorlds() as $world) {
            $this->updateRadius($world);
        }
    }

    public function onWorldLoad(WorldLoadEvent $event): void
    {
        $world = $event->getWorld();
        $this->updateRadius($world);
    }

    private function updateRadius(World $world): void
    {
        if (isset($this->worldTickRadius[$world->getFolderName()])) {
            $world->setChunkTickRadius(max(0, $this->worldTickRadius[$world->getFolderName()]));
        } else {
            $world->setChunkTickRadius($this->defaultTickRadius);
        }
    }
}
