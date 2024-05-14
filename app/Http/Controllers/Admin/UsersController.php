<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function index()
  {
    $data = [
      0 => ['name' => 'Tam Tran 1', 'createdAt' => '2024-01-02', 'lastLoggedIn' => '2024-05-01'],
      1 => ['name' => 'Tam Tran 2', 'createdAt' => '2024-01-03', 'lastLoggedIn' => '2024-05-02'],
    ];

    return view('admin.users', [
      'data' => $data
    ]);
  }
}
