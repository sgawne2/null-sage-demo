<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Testimonials extends Component
{
    /**
     * Testimonial dummy data
     *
     * @var array
     */
    public $items = [
        [
            'reviewer' => 'Jeo Stanlee',
            'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor',
            'image' => 'testimonials-0.jpg',
        ],
        [
            'reviewer' => 'Jeo Stanlee',
            'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor',
            'image' => 'testimonials-1.jpg',
        ],
        [
            'reviewer' => 'Jeo Stanlee',
            'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor',
            'image' => 'testimonials-2.jpg',
        ],
        [
            'reviewer' => 'Jeo Stanlee',
            'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor',
            'image' => 'testimonials-3.jpg',
        ],
        [
            'reviewer' => 'Jeo Stanlee',
            'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor',
            'image' => 'testimonials-4.jpg',
        ],
        [
            'reviewer' => 'Jeo Stanlee',
            'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor',
            'image' => 'testimonials-5.jpg',
        ],
        [
            'reviewer' => 'Jeo Stanlee',
            'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor',
            'image' => 'testimonials-6.jpg',
        ],
    ];

    /**
     * Create the component instance.
     *
     * @return void
     */
    public function __construct()
    {
        shuffle($this->items);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.testimonials');
    }
}
