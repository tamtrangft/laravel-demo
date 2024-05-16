<?php

namespace Modules\User\View\Components;

use App\Services\MenuService;
use Illuminate\View\Component;
use Illuminate\View\View;

class MasterLayout extends Component
{
  public MenuService $menuService;

  /**
   * Create a new component instance.
   */
  public function __construct(
    public string $title,
    public MenuService $thisMenuService

  ) {
    $this->menuService = $thisMenuService;
  }

  /**
   * Get the view/contents that represent the component.
   */
  public function render(): View|string
  {
    return view('user::layouts.master', ['name' => $this->menuService->getUserName(), 'profileUrl' => $this->menuService->getProfileUrl()]);
  }
}
