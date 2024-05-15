<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function index()
  {
    $data = User::all();

    return view('admin.users', [
      'data' => $data
    ]);
  }

  public function list(Request $request)
  {
    $data = User::all();
    // ($request->json("length", 'length'));

    return [
      'data' => $data,
      'recordsTotal' => User::count(),
      'recordsFiltered' => User::count()
    ];
  }
}
