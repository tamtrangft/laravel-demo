<?php

namespace App\View\Components;

use App\Services\UserNameService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UnauthenticatedLayout extends Component
{
  public UserNameService $userName;
  /**
   * Create a new component instance.
   */
  public function __construct(
    public string $title,
    public UserNameService $thisUserName

  ) {
    // $this->request = $newRequest;
    $this->userName = $thisUserName;
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.layouts.unauthenticated-layout', ['name' => $this->userName->get()]);
  }
}
