<?php

namespace Sortarad\Rss;

use Sortarad\Rss\Widgets\Rss;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'sortarad';

    protected $widgets = [
        Rss::class
    ];
}
