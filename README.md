# RSS

## Installation

Install via the Control Panel or via composer

```bash
composer require sortarad/rss
```

## Enable Widget

Add widget to control panel configuration `config/statamic/cp.php` file.

e.g:
```php
[
	'type' => 'extra_extra',
	'width' => 50,
	'url' => 'https://statamic.com/blog.rss',
	'limit' => 5,
]
```
