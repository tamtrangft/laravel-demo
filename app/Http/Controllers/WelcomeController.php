<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
  public function index()
  {
    $data = [
      0 => ['title' => 'Styleguide', 'captions' => [0 => ' Reusable components presentation'], 'url' => '/styleguide'],
      1 => ['title' => 'Reuseable components with Blade', 'captions' => [0 => 'Bundling with Vite', 1 => 'Bootstrap with theme. Component encapsulation', 2 => 'Class components and Anonymous components'], 'url' => '/styleguide'],
      2 => ['title' => 'Layout by route', 'captions' => [0 => 'Layout outlet. Group route with prefix'], 'url' => '/admin'],
      3 => ['title' => 'Authentication', 'captions' => [0 => 'Authentication with session and cookie'], 'url' => '/login'],
      4 => ['title' => 'App organisation with Module', 'captions' => [0 => 'Break the app into modules'], 'url' => '/admin'],
      5 => ['title' => 'Pagination, filter and loading data with Datatables and JQuery', 'captions' => [0 => 'Demo using JQery, bootstrapCSS and Datatables'], 'url' => './admin'],      
      6 => ['title' => 'Integrate gprc for Laravel', 'captions' => [0 => 'Use grpc web client to send/get data'], 'url' => '/admin'],
    ];

    return view('welcome', [
      'data' => $data
    ]);
  }
}
