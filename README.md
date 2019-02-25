# Simple Armory RU

UNDER DEVELOPMENT.

## Development

### Build

```bash
git clone https://github.com/kevinclement/SimpleArmory.git
php patch.php
npm install
npm install -g grunt-cli bower
bower install
```

### Run

```bash
grunt serve
xdg-open http://localhost:9001
```

### Contribute

1. Open `patches/` and find array with file you want to translate
2. Run `cat <filename from patches/> | grep '"name": "[A-Z]' | less` to list not translated things
3. Add new string with translation to `patches/<patchfile>`
