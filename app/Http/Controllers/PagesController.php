<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PagesController extends Controller
{
        public function home()
      {
       return view('pages.home');
      }

      public function query()
    {

      $users = DB::table('users')->get();
      return view('pages.query', ['users' => $users]);



    }

    public function map()
  {
   return view('pages.map');
  }
}
