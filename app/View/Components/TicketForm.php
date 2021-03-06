<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class TicketForm extends Component
{

    public $services;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->services = Service::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ticket-form');
    }
}