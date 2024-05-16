<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
  public function index()
  {
    $data = [
      ['title' => 'Tools and libs configuration', 'captions' => ['Vite, Bootstrap, JQuery', 'npm install bootstrap @popperjs/core sass', 'npm install jquery'], 'url' => '/styleguide'],
      ['title' => 'Reuseable components with Blade', 'captions' => ['Bootstrap with theme. Component encapsulation', 'Class components and Anonymous components'], 'url' => '/styleguide'],
      ['title' => 'Styleguide', 'captions' => ['Reusable components presentation'], 'url' => '/styleguide'],
      ['title' => 'Layout and routes', 'captions' => ['Layout and assets stack. Group route with prefix', 'Web routes and API routes'], 'url' => '/admin'],
      ['title' => 'Authentication', 'captions' => ['Authentication with session and cookie', 'Middlewares and guarding routes'], 'url' => '/login'],
      ['title' => 'App organisation with Module', 'captions' => ['Break the app into modules'], 'url' => '/user/profile'],
      ['title' => 'Service container and Service provider', 'captions' => ['Dependency injection'], 'url' => '/admin/profile'],
      ['title' => 'Pagination, filter and loading data with Datatables and JQuery', 'captions' => ['Demo using JQery, bootstrapCSS and Datatables'], 'url' => '/admin/users'],
      ['title' => __('welcome.title_localization'), 'captions' => ['Support multiple language'], 'url' => '/kh'],
      ['title' => 'Integrate gprc for Laravel', 'captions' => ['Use grpc web client to send/get data'], 'url' => '/admin'],
    ];

    return view('welcome', [
      'data' => $data
    ]);
  }
}
