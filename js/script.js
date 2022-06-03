/* show cookie policy */
'use strict';
          
document.addEventListener("DOMContentLoaded", function() {
   showCookiePolicy();
});

document.querySelector('.cookie-compliance__close').addEventListener("click", function() {
  hideCookiePolicy();
});

function showCookiePolicy() {
   if (!getCookie()) {
       var btn = document.querySelector('.cookie-compliance__submit');
  
       btn.addEventListener('click', function(e) {
         var x1 = 'necessary=' + document.getElementById("necessary").checked;
         var x2 = 'prefs=' + document.getElementById("prefs").checked;
         var x3 = 'stats=' + document.getElementById("stats").checked;
         var x4 = 'marketing=' + document.getElementById("marketing").checked;
         var Cookie_Value = x1 + '|' + x2 + '|' + x3 + '|' + x4;
           e.preventDefault();
           setCookie(Cookie_Value);
           hideCookiePolicy();
       });
       setTimeout(() => {
         document.documentElement.classList.add('js-show-cookie-banner');
       }, 3000);
   }
}

function hideCookiePolicy() {
   document.documentElement.classList.remove('js-show-cookie-banner');
}

function getCookie() {
   return /(^|;)\s*policy=/.test(document.cookie);
}

function setCookie(Cookie_Value) {
   var date = new Date()
   date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000))
   document.cookie = `policy=${Cookie_Value}; expires=${date.toUTCString()}; path=/`
}