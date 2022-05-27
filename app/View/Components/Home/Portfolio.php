<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $projects = [];

    public $tabs;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->projects = [
            [
                'title' => 'HR - Employee Management',
                'category' => ['Laravel', 'Vue.Js'],
                'image' => url('img/management.png')
            ],
            [
                'title' => 'Best Marketing tips',
                'category' => ['Laravel'],
                'image' => url('img/task-tracker.png')
            ],
            [
                'title' => 'Task Tracker',
                'category' => ['Laravel', 'Livewire'],
                'image' => url('img/task-tracker.png')
            ],
            [
                'title' => 'Business Card Design',
                'category' => ['TailwindCSS'],
                'image' => url('img/task-tracker.png')
            ],
            [
                'title' => 'Game Tracker',
                'category' => ['Laravel', 'Vue.Js'],
                'image' => url('img/games.png')
            ],
            [
                'title' => 'Web Shop',
                'category' => ['Laravel', 'Vue.Js'],
                'image' => url('img/web-shop.png')
            ]
        ];

        $this->tabs = collect($this->projects)
            ->pluck('category')
            ->flatten()
            ->unique()
            ->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
