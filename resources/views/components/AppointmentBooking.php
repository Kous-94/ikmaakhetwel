<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppointmentBooking extends Component
{
    /**
     * The success message to be displayed.
     *
     * @var string
     */
    public $successMessage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($successMessage = null)
    {
        $this->successMessage = $successMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.appointment-booking');
    }
}
