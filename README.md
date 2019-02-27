# Simple Armory RU

UNDER DEVELOPMENT.

## Translation status

* Website - done
* Calendar - done
* Reputation - done
* Achievements - done
* Factions - in progress
* Collections/Mounts - in progress
* Collections/Companions - in progress
* Collections/Battle Pets - done
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
