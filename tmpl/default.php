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
  $Statistics  = ' checked="checked" ';
}
if ($params->get('Marketing') == 1) {
  $Marketing  = 'checked="checked"';
}
$Show_Not_Agree = '';
$Show_read_more = '';
$show_Not_Agree_redirect = '#';

if ($params->get('show_Not_Agree_redirect') == 1) {
  $show_Not_Agree_redirect  = $params->get('show_Not_Agree_redirect_url');
}
if ($params->get('show_Not_Agree') == 1) {
  $Show_Not_Agree  = ' <button class="cookie-compliance__Not_submit btn btn-danger"  type="submit" value="' . $show_Not_Agree_redirect . '"  id ="NotAgree">Not Agree</button>';
}


if ($params->get('show_read_more') == 1) {
  $Show_read_more  = '<a class="cookie-Read_more btn btn-success" href="' . $params->get('read_more_url') . '" type="submit" >Read more </a>';
}


?>
<!-- partial:index.partial.html -->
<div class=" cookie-compliance ">
  <div class="cookie-compliance__container">
    <?php if ($Privacy_Title == '') : ?>
      <h3 class="cookie-compliance__title">This website uses cookies.</h3>
    <?php else : ?>
      <h3 class="cookie-compliance__title"><?php echo $Privacy_Title; ?></h3>
    <?php endif ?>
    <?php if ($Privacy_Description == '') : ?>
      <p class="cookie-compliance__copy">We uses cookies for personalise content, to provide social media features, and to analyse our traffic.
        <br /> Read about how we use cookies in
        <a href="#">Privacy Policies</a> and <a href="#">GDPR Agreement</a>.
        <br />If you continue to use this site, you consent to our use of cookies.
      </p>
    <?php else : ?>
      <p class="cookie-compliance__copy"> <?php echo $Privacy_Description; ?></p>
    <?php endif ?>

    <form class="cookie-compliance__form">
      <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="col-6 col-sm-3 col-md-3 col-lg-2 col-xl-2">
          <div class="form-group">
            <input class="cookie-compliance__checkbox" type="checkbox" id="necessary" checked="checked" disabled="disabled" name="subscribe" value="newsletter" />
            <label class="cookie-compliance__label" for="necessary">Necessary</label>
          </div>
        </div>
        <div class="col-6 col-sm-3 col-md-3 col-lg-2 col-xl-2">
          <div class="form-group">
            <input class="cookie-compliance__checkbox" type="checkbox" id="prefs" name="prefs" value="prefs" <?php echo $Preferences; ?> />
            <label class="cookie-compliance__label" for="prefs">Preferences</label>
          </div>
        </div>
        <div class="col-6 col-sm-3 col-md-3 col-lg-2 col-xl-2">
          <div class="form-group">
            <input class="cookie-compliance__checkbox" type="checkbox" id="stats" name="stats" value="stats" <?php echo $Statistics; ?> />
            <label class="cookie-compliance__label" for="stats">Statistics </label>
          </div>
        </div>
        <div class="col-6 col-sm-3 col-md-3 col-lg-2 col-xl-2">
          <div class="form-group">
            <input class="cookie-compliance__checkbox" type="checkbox" id="marketing" name="marketing" value="marketing" <?php echo $Marketing; ?> />
            <label class="cookie-compliance__label" for="marketing">Marketing</label>
          </div>
        </div> 
    
        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
          <div class="form-group">
            <button class="cookie-compliance__submit btn btn-info" type="submit">I Agree</button>

          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
          <div class="form-group">
            <?php echo $Show_Not_Agree; ?>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
          <div class="form-group">
            <?php echo $Show_read_more; ?>
          </div>
        </div> 
      </div> 



  </form>
  <div class="cookie-compliance__close" id="compliance_close" onclick="hideCookiePolicy()">Close </div>
  <!-- <button onclick="gfg_Run()"> Click Here </button>
    
    <p id="GFG_UP" style="font-size: 20px; font-weight: bold;"> </p> 
    <p id="GFG_DOWN" style="color:green;  font-size: 26px; font-weight: bold;"> </p> -->

</div>
</div>
<!-- partial -->





<script>
  var el_up = document.getElementById("GFG_UP");
  var el_down = document.getElementById("GFG_DOWN");
  el_up.innerHTML = "Click on the button to " +
    "get the stored cookies.";

  function getCookies() {
    var cookies = document.cookie.split(';');
    var ret = '';
    for (var i = 1; i <= cookies.length; i++) {
      if (cookies[i - 1] != '') {
        ret += i + ' - ' + cookies[i - 1] + "<br>";
      }

    }
    return ret;
  }

  function gfg_Run() {
    el_down.innerHTML = getCookies();
  }
</script>