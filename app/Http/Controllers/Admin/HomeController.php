<?php
# @Author: maerielbenedicto
# @Date:   2019-11-02T15:44:45+00:00
# @Last modified by:   maerielbenedicto
# @Last modified time: 2019-11-02T15:56:19+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:admin');
  }

    public function index() {
      return view('admin.home');
    }
}
