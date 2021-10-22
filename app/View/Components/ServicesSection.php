<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class ServicesSection extends Component
{
    public $services;
    public $waitingCustomers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->services = Service::with('customers')->get();
        // $this->waitingCustomers = $this->services->customers()->where('status', 'waiting')->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.services-section');
    }
}