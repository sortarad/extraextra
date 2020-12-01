## How to install?

Install via the Control Panel or via composer

```bash
composer require sortarad/extraextra
```

## How to activate?
Add this widget to control panel configuration file located in config/statamic/cp.php .

```php
[
	'type' => 'extra_extra',
	'width' => 50,
	'url' => 'https://statamic.com/blog.rss',
	'limit' => 5,
],
```
