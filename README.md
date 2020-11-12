![extraextra](https://laravel-og.beyondco.de/extraextra.png?theme=light&packageName=sortarad%2Fextraextra&pattern=architect&style=style_1&description=The+hottest+news+right+in+your+Statamic+dashboard.&md=1&showWatermark=0&fontSize=100px&images=newspaper)

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
