<?php

namespace App\View\Components;

use App\Services\UserNameService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class AdminLayout extends Component
{
  // public Request $request;
  public UserNameService $userName;
  /**
   * Create a new component instance.
   */
  public function __construct(
    public string $title,
    // public Request $newRequest
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
    // $name = $this->request->user()['name'];
    return view('components.layouts.admin-layout', ['name' => $this->userName->get()]);
  }
}
