<?php

/**
 * Plugin name: MJ Slider
 * Plugin URI: http://www.#.com
 * Description: A slider plugin to display images in carousel 
 * Version: 1.0
 * Requires at least: 6.0
 * Author: Matthew John Alex
 * Author URI: http://www.#.com
 * License: GPL v2 or Later
 * Licence URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mj-slider
 * Domain Path: /languages
 */

/*
MJ Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

MJ Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with MJ Slider. If not, see http://www.gnu.org/licenses/gpl-2.0.html.
*/
 if(! defined('ABSPATH')){
    exit;
 }

 if (! class ('MJ_Slider')){
   class MJ_SLIDER {
      function __construct(){

      }
   }
 }

if (class_exist ('MJ_Slider')){
   $mj_slider = new MJ_Slider();
}