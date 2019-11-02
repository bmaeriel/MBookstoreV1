<?php
# @Author: maerielbenedicto
# @Date:   2019-11-02T15:44:36+00:00
# @Last modified by:   maerielbenedicto
# @Last modified time: 2019-11-02T15:56:21+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:user');
  }

    public function index() {
      return view('user.home');
    }
}
