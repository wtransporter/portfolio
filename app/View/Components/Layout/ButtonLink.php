<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $href,
        public string $target = '_self',
        public string $type = 'primary'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.button-link');
    }
}
