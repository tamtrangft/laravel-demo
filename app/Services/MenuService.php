<?php

namespace App\Services;

use Illuminate\Http\Request;

class MenuService
{
  public Request $request;

  public function __construct(
    public Request $newRequest
  ) {
    $this->request = $newRequest;
  }

  public function getUserName() {
    if ($this->request->user()) {
      return $this->request->user()['name'];
    } else {
      return '';
    }
  }

  public function getProfileUrl() {
    if ($this->request->user()) {
      return '/'.$this->request->user()['role'].'/profile';
    } else {
      return '';
    }
  }
}
