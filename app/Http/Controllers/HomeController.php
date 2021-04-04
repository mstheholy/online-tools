<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuItem;

class HomeController extends Controller
{
  public function index() {
    return view("pages.main");
  }

  public function loadTool($item) {}

  public function loadTools($menu, $item) {
    //$Menu = Menu::all();
    $menus = "";
    foreach (Menu::all() as $value) {
      if (\Str::slug($value->name) == $menu) {
        $menus = $value->name;
        break;
      }
    }
    dd($menus);
  }
}