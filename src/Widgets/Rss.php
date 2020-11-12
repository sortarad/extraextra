<?php

namespace Sortarad\Rss\Widgets;

use Statamic\Widgets\Widget;

class Rss extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        $feed_url = $this->config('url');
        $limit = $this->config('limit');

        return view('sortarad::widgets.rss');
    }
}
