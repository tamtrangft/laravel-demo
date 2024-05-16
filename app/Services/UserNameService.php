<?php

namespace App\Services;

use Illuminate\Http\Request;

class UserNameService
{
  public Request $request;

  public function __construct(
    public Request $newRequest
  ) {
    $this->request = $newRequest;
  }

  public function get() {
    if ($this->request->user()) {
      return $this->request->user()['name'];
    } else {
      return '';
    }
  }
}
