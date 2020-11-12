<?php

namespace Sortarad\ExtraExtra;

use Sortarad\ExtraExtra\Widgets\ExtraExtra;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'sortarad';

    protected $widgets = [
        ExtraExtra::class
    ];
}
