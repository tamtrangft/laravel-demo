<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index()
  {
    $data = [
      ['name', 'Tam Tran'],
      ['dob', '1992-06-04'],
      ['gender', 'male'],
      ['role', 'admin']
    ];

    return view('admin.profile', [
      'data' => $data
    ]);
  }
}
