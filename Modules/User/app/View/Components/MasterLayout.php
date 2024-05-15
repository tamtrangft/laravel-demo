<?php

namespace Modules\User\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MasterLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
      public string $title
    )
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('user::layouts.master');
    }
}
