<?php

/**
 * @package Joomla.Site
 * @subpackage mod_firstmodule
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 * class show   visible-phone visible-tablet visible-desktop  
 * class show   hidden-phone hidden-tablet hidden-desktop  
 */
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$menu = $app->getMenu();

$Privacy_Title =  $params->get('Privacy_Title');
$Privacy_Description =  $params->get('Privacy_Description');

$Preferences = '';
$Statistics = '';
$Marketing = '';
if ($params->get('Preferences') == 1) {
  $Preferences  = ' checked="checked" ';
}
if ($params->get('Statistics') == 1) {
  $Statistics .= ' checked="checked" ';
}
if ($params->get('Marketing') == 1) {
  $Marketing .= 'checked="checked"';
}


?>
<!-- partial:index.partial.html -->
<div class="cookie-compliance">
  <div class="cookie-compliance__container">
    <?php if ($Privacy_Title == '') : ?>
      <h3 class="cookie-compliance__title">This website uses cookies.</h3>
    <?php else : ?>
      <h3 class="cookie-compliance__title"><?php echo $Privacy_Title; ?></h3>
    <?php endif ?>


    <?php if ($Privacy_Description == '') : ?>
      <p class="cookie-compliance__copy">We uses cookies for personalise content, to provide social media features, and to analyse our traffic.<br /> Read about how we use cookies in <a href="#">Privacy Policies</a> and <a href="#">GDPR Agreement</a>.<br />If you continue to use this site, you consent to our use of cookies.</p>
    <?php else : ?>
      <p class="cookie-compliance__copy"> <?php echo $Privacy_Description; ?></p>
    <?php endif ?> 
   
    <form class="cookie-compliance__form">
      <div class="cookie-compliance__form-item">
        <input class="cookie-compliance__checkbox" type="checkbox" id="necessary" checked="checked" disabled="disabled" name="subscribe" value="newsletter" />
        <label class="cookie-compliance__label" for="necessary">Necessary</label>
      </div>
      <div class="cookie-compliance__form-item">
        <input class="cookie-compliance__checkbox" type="checkbox" id="prefs" name="prefs" value="prefs" <?php echo $Preferences; ?> />
        <label class="cookie-compliance__label" for="prefs">Preferences</label>
      </div>
      <div class="cookie-compliance__form-item">
        <input class="cookie-compliance__checkbox" type="checkbox" id="stats" name="stats" value="stats" <?php echo $Statistics; ?>/>
        <label class="cookie-compliance__label" for="stats">Statistics </label>
      </div>
      <div class="cookie-compliance__form-item">
        <input class="cookie-compliance__checkbox" type="checkbox" id="marketing" name="marketing" value="marketing" <?php echo $Marketing; ?>/>
        <label class="cookie-compliance__label" for="marketing">Marketing</label>
      </div>
      <div class="cookie-compliance__form-item">
        <button class="cookie-compliance__submit" type="submit">I Agree</button>
      </div>
    </form>
    <div class="cookie-compliance__close">Close </div>
  </div>
</div>
<!-- partial -->