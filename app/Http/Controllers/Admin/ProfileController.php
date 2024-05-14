<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index()
  {
    $data = [
      'Name' => 'Tam Tran',
      'Date of birth'=> '1992-06-04',
      'Gender' => 'male',
      'Role' => 'admin'
    ];

    return view('admin.profile')->with('data', $data);
  }
}
