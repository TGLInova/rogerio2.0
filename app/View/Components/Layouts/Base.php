<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Base extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
        public ?string $image = null,
        public ?string $canonical = null,
        public ?string $htmlClass = null,
        public ?string $bodyClass = null
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.base');
    }
}
