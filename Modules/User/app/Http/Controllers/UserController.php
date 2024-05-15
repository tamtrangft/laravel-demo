<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
  public function index()
  {
    $data = [
      'Name' => 'Tam Tran',
      'Date of birth'=> '1992-06-04',
      'Gender' => 'male',
      'Role' => 'admin'
    ];

    return view('user::profile')->with('data', $data);
  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user::create');
    }



    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('user::edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
