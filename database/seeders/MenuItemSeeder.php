<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run() {
    $menu_items = [
      array("menu_id" => NULL, "name" => "Quotes Maker", "icon" => "fa fa-quote-left"),
      array("menu_id" => NULL, "name" => "Zone-H Mass Mirror", "icon" => "fa fa-h-square"),
      array("menu_id" => NULL, "name" => "Query SQL-i", "icon" => "fa fa-database"),

      array("menu_id" => 1, "name" => "JavaScript Overlay", "icon" => NULL),
      array("menu_id" => 1, "name" => "PHP Hash", "icon" => NULL),
      array("menu_id" => 1, "name" => "Sitemap", "icon" => NULL),
      array("menu_id" => 1, "name" => "Barcode", "icon" => NULL),

      array("menu_id" => 2, "name" => "Array to Xml", "icon" => NULL),
      array("menu_id" => 2, "name" => "Case", "icon" => NULL),

      array("menu_id" => 3, "name" => "Email", "icon" => NULL),
      array("menu_id" => 3, "name" => "Proxy", "icon" => NULL),
      array("menu_id" => 3, "name" => "cPanel", "icon" => NULL),
      array("menu_id" => 3, "name" => "Shell Backdoor", "icon" => NULL),
      array("menu_id" => 3, "name" => "Github Account", "icon" => NULL),
      array("menu_id" => 3, "name" => "Alexa Rank", "icon" => NULL),

      array("menu_id" => 4, "name" => "Write File", "icon" => NULL),
      array("menu_id" => 4, "name" => "Upload File", "icon" => NULL),

      array("menu_id" => 5, "name" => "Bcrypt Password", "icon" => NULL),
      array("menu_id" => 5, "name" => "Balitbang Password", "icon" => NULL),
      array("menu_id" => 5, "name" => "Balitbang Auto SQL-i", "icon" => NULL),

      array("menu_id" => 6, "name" => "HTML", "icon" => NULL),
      array("menu_id" => 6, "name" => "PHP", "icon" => NULL),
      array("menu_id" => 6, "name" => "CSS", "icon" => NULL),
      array("menu_id" => 6, "name" => "JavaScript", "icon" => NULL),
    ];

    foreach ($menu_items as $item) {
      MenuItem::create($item);
    }
  }
}