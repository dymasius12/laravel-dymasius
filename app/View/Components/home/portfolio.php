<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Arr;
use function url;
use function view;

class Portfolio extends Component
{
    /**
     * Create a new component instance.
     */
    public array $items = [];
    public array $tabs = [];
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'Full Stack app with Laravel, Tailwinds CSS and Vue 3',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com/dymasius12/laravel-dymasius'
            ],
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'Full Stack app with Laravel, Tailwinds CSS and Vue 3',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com/dymasius12/laravel-dymasius'
            ],
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'Full Stack app with Laravel, Tailwinds CSS and Vue 3',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com/dymasius12/laravel-dymasius'
            ],
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'Full Stack app with Laravel, Tailwinds CSS and Vue 3',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com/dymasius12/laravel-dymasius'
            ],
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'Full Stack app with Laravel, Tailwinds CSS and Vue 3',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com/dymasius12/laravel-dymasius'
            ],
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'Full Stack app with Laravel, Tailwinds CSS and Vue 3',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com/dymasius12/laravel-dymasius'
            ],
        ];
        
        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
