<?php

namespace App\View\Components;

use App\Services\MenuService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserLayout extends Component
{
  public MenuService $menuService;
  /**
   * Create a new component instance.
   */
  public function __construct(
    public string $title,
    // public Request $newRequest
    public MenuService $thisMenuService

  ) {
    // $this->request = $newRequest;
    $this->menuService = $thisMenuService;
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.layouts.user-layout', ['name' => $this->menuService->getUserName(), 'profileUrl' => $this->menuService->getProfileUrl()]);
  }
}
