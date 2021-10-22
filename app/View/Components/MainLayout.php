<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainLayout extends Component
{

    public $title;
    public $tid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $tid = '')
    {
        $this->title = $title;
        $this->tid = $tid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.main-layout');
    }
}