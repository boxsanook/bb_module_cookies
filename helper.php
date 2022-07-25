<?php

/**
 * Helper class for Hello World! module
 *
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
$stylelink = '';
$stylelink .= '<link rel="stylesheet" href="modules/mod_bb_module_cookies/css/style.css" rel="stylesheet" />' . "\n";
$stylelink .= '<link rel="stylesheet" href="modules/mod_bb_module_cookies/css/normalize.min.css.map" rel="stylesheet" />' . "\n";
$stylelink .= '<script  src="modules/mod_bb_module_cookies/js/script.js" rel="stylesheet" /></script>' . "\n"; 
defined('_JEXEC') or die('Restricted Access');

use Joomla\CMS\Factory;

$document = Factory::getDocument();

$document->addCustomTag($stylelink);
class ModHelloWorldHelper
{
   /**
    * Retrieves the hello message
    *
    * @param   array  $params An object containing the module parameters
    *
    * @access public
    */

   public static function getHello($params)
   {
      return 'Hello, I am BoxS.me';
   }
}
