# WebSub – Plugin for Kirby

**A very simple [Kirby](https://getkirby.com) plugin to inform a WebSub server about new or updated posts.**

Learn more about [WebSub on indieweb.org](https://indieweb.org/WebSub).

---

## Installation

Download/clone this repo into the `site/plugins` folder of your Kirby installation.

---

## Configuration

Configure with the following options:

### WebSub Server URL

Set your WebSub hub server. [Here's a list](https://indieweb.org/WebSub#Hubs).

```php
'florianziegler.websub.hubUrl' => 'https://pubsubhubbub.superfeedr.com/',
```

### Feed URL

The URL of your RSS/Atom feed.

```php
'florianziegler.websub.feedUrl' => 'YOUR_FEED_URL',
```

### Add WebSub Hub to your feed

Make sure you have these two links in your feed:

```HTML
<link rel="self" href="YOUR_FEED_URL">
<link rel="hub" href="https://pubsubhubbub.superfeedr.com" />
```

More info [here](https://indieweb.org/How_to_publish_and_consume_WebSub).

---

## License

[MIT License](https://github.com/florianziegler/kirby-photo-stats/blob/main/LICENSE) Copyright © 2025 Florian Ziegler

---

## Questions/feedback

If you have any feedback on how to improve the plugin or fix a bug, feel free to [create an issue](https://github.com/florianziegler/kirby-websub/issues).

If you want to leave comment or just say hello, please [do so](https://florianziegler.com).