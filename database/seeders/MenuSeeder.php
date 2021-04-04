<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run() {
    $menus = [
      array("name" => "Generator", "icon" => "fa fa-cogs"),
      array("name" => "Converter", "icon" => "fa fa-exchange"),
      array("name" => "Checker", "icon" => "fa fa-check-circle"),
      array("name" => "My Storage", "icon" => "fa fa-hdd"),
      array("name" => "Cracker", "icon" => "fa fa-unlock"),
      array("name" => "Minify Code", "icon" => "fa fa-file-code"),
    ];

    foreach ($menus as $menu) {
      Menu::create($menu);
    }
  }
}