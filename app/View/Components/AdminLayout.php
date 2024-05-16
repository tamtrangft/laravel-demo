<?php

namespace App\View\Components;

use App\Services\MenuService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class AdminLayout extends Component
{
  // public Request $request;
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
    // $name = $this->request->user()['name'];
    return view('components.layouts.admin-layout', ['name' => $this->menuService->getUserName()]);
  }
}
