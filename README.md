[![](https://poggit.pmmp.io/shield.dl/PerWorldChunkTick)](https://poggit.pmmp.io/p/PerWorldChunkTick) [![](https://poggit.pmmp.io/shield.dl.total/PerWorldChunkTick)](https://poggit.pmmp.io/p/PerWorldChunkTick)

## About

This Pocketmine-MP plugin gives the ability to set chunk tick radius per world. Allowing you to disable or set chunk ticking radius to a custom value per-world for better performance.

Note: This is same as chunk-ticking.tick-radius given in pocketmine.yml with the ability to customize it per world. Disabling chunk-ticking(by setting value 0) may lead to your plugins or server to show weird/unexpected results.

Chunk ticking includes tree/plants/crop growth, light calculations etc. This is similar to simulation distance in Minecraft.

## Why use it ?
You may not know that but chunk ticking is a very expensive operation, specially with many online players spread over large distance.

Even without many online players , disabling chunk ticking also massively reduce cpu spike/server load while loading chunks as light calculations, etc need not to be done (talking upto 50% improvement in many cases)

## How to use?
- Just download the ``.phar`` file.
- Upload it to your ``plugins`` folder.
- Edit config.yml to your needs
- Restart the server.
- Done!

Worlds like server lobby, gamemodes like bedwars, skywars, etc that do not need chunk-ticking should set it to 0 whereas worlds like faction , survival where player count is high and chunk ticking is required should reduce the value as desired (default 3) 
## Config

```yaml
# Set value to 0 to disable the chunk-ticking

# Default tick radius for worlds that are not listed in the world-tick-radius section
default-tick-radius: 3

world-tick-radius:
  world: 3
  world2: 2
  world3: 0
```

## Todo
- [] Allow to set block ids not to tick (same as disable-block-ticking) per world
- [] Make commands to modify it in-game

## Additional Notes

If you encounter any bugs or glitches, please create an issue [here](https://github.com/HGRgamer/PerWorldChunkTick/issues/new).

Any suggestions you may have to improve PerWorldChunkTick are welcome. Feel free to create an issue [here](https://github.com/HGRgamer/PerWorldChunkTick/issues/new).

If you want to contribute to this project, create a pull request [here](https://github.com/HGRgamer/PerWorldChunkTick/pulls).

## Credits
- Logo by [lineartestpilot](https://www.123rf.com/profile_lineartestpilot) <img src="https://previews.123rf.com/images/lineartestpilot/lineartestpilot1603/lineartestpilot160302944/53213804-freehand-drawn-black-and-white-cartoon-ticking-clock.jpg" width="20" height="15">
- Plugin by master HGRgamer