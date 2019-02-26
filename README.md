# Simple Armory RU

UNDER DEVELOPMENT.

## Translation status

* Website - done
* Calendar - done
* Reputation - done
* Achievements/Overview - done
* Achievements/Character - done
* Achievements/Quests - done
* Achievements/Exploration - done
* Achievements/PvP - done
* Achievements/Dungeons & Raids - done
* Achievements/Professions - in progress
* Achievements/Reputation - in progress
* Achievements/Events - in progress
* Achievements/Pets - in progress
* Achievements/Collections - in progress
* Achievements/Expansion Features - in progress
* Achievements/Legacy - in progress
* Achievements/Feats - in progress
* Collections/Mounts - in progress
* Collections/Companions - in progress
* Collections/Battle Pets - in progress
* Collections/Toys - in progress

## Development

### Build & Run

```bash
git clone https://github.com/kevinclement/SimpleArmory.git
./dev.sh
```

Open [localhost:9001](http://localhost:9001)

### Contribute

1. Open `patches/` and find array with file you want to translate
2. Run `cat <filename from patches/> | grep '"name": "[A-Z]' | less` to list not translated things
3. Add new string with translation to `patches/<patchfile>`
