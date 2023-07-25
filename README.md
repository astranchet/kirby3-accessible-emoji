# Kirby Tag - Accessible emoji

A KirbyTag to turn emojis in texts into accessible HTML, by hiding the emoji from screen readers. It should be used when the emoji is only used for a decorative purpose.

## Installation

### Download

Download and copy this repository to `/site/plugins/accessible-emoji`.

### Git submodule

```bash
git submodule add https://github.com/astranchet/kirby3-accessible-emoji.git site/plugins/accessible-emoji
```

### Composer

```bash
composer require astranchet/accessible-emoji
```

## Usage

```
Make my emoji accessible! (emoji: 🎉)
```

It will turn this text into the following HTML:

```html
Make my emoji accessible! <span aria-hidden="true">🎉</span>
```

## License

MIT
