<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navigation extends Component
{
    public array $navigationItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'About', 'link' => '#about'],
            ['label' => 'Projects', 'link' => '#projects'],
            ['label' => 'Contact', 'link' => '#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navigation');
    }
}
