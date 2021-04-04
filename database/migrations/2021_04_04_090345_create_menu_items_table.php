<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up() {
    Schema::create('menu_items', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('menu_id')->nullable();
      $table->string('name', 50);
      $table->string('icon')->nullable();
      $table->timestamps();

      $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down() {
    Schema::dropIfExists('menu_items');
  }
}