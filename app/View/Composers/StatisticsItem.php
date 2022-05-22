<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class StatisticsItem extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.landing-page.statistics-item',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'test' => "hello"
        ];
    }
}
