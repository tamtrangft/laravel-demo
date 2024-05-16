<?php

namespace Modules\User\View\Components;

use App\Services\UserNameService;
use Illuminate\View\Component;
use Illuminate\View\View;

class MasterLayout extends Component
{
  public UserNameService $userName;

  /**
   * Create a new component instance.
   */
  public function __construct(
    public string $title,
    public UserNameService $thisUserName

  ) {
    $this->userName = $thisUserName;
  }

  /**
   * Get the view/contents that represent the component.
   */
  public function render(): View|string
  {
    return view('user::layouts.master', ['name' => $this->userName->get()]);
  }
}
