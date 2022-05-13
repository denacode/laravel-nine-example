<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Study;

class StudyFormFields extends Component
{

    /**
     * The study data.
     *
     * @var Study
     */
    public $study;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Study $study)
    {
        $this->study = $study;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.study-form-fields', [ 'study '=> $this->study ]);
    }
}
