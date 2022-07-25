/* show cookie policy */
'use strict';
          
document.addEventListener("DOMContentLoaded", function() {
   showCookiePolicy();
});



// document.querySelector('.cookie-compliance__close').addEventListener("click", function() {
//   hideCookiePolicy();
// });
 
// document.querySelector('.cookie-compliance__Not_submit').addEventListener("click",function() {
//    NotAccept();
// });
        


function showCookiePolicy() {
   if (!getCookie()) {

 
       var btn = document.querySelector('.cookie-compliance__submit'); 
       btn.addEventListener('click', function(e) {
         var x1 = 'necessary=' + document.getElementById("necessary").checked;
         var x2 = 'Preferences=' + document.getElementById("prefs").checked;
         var x3 = 'Statistics=' + document.getElementById("stats").checked;
         var x4 = 'Marketing=' + document.getElementById("marketing").checked;
         var Cookie_Value = x1 + '|' + x2 + '|' + x3 + '|' + x4;
           e.preventDefault();
           setCookie(Cookie_Value);
           hideCookiePolicy();
       });
       setTimeout(() => {
         document.documentElement.classList.add('js-show-cookie-banner');
       }, 2000);

    
   }
   var Url = document.getElementById("NotAgree").value;
   var btnNot_submit = document.querySelector('.cookie-compliance__Not_submit'); 
   btnNot_submit.addEventListener('click', function(e) {
    e.preventDefault();
    hideCookiePolicy();
   //  console.log(x);
   if (Url !='#'){
      window.location.href=Url ;  
   }
  
  });
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


// /* show cookie policy */
// 'use strict';
          
// document.addEventListener("DOMContentLoaded", function() {
//    showCookiePolicy();
// });

// document.querySelector('.cookie-compliance__close').addEventListener("click", function() {
//   hideCookiePolicy();
// });

// function showCookiePolicy() {
//    if (!getCookie()) {
//        var btn = document.querySelector('.cookie-compliance__submit');
  
//        btn.addEventListener('click', function(e) {
//            e.preventDefault();
//            setCookie();
//            hideCookiePolicy();
//        });
//        setTimeout(() => {
//          document.documentElement.classList.add('js-show-cookie-banner');
//        }, 3000);
//    }
// }

// function hideCookiePolicy() {
//    document.documentElement.classList.remove('js-show-cookie-banner');
// }

// function getCookie() {
//    return /(^|;)\s*policy=/.test(document.cookie);
// }

// function setCookie() {
//    var date = new Date()
//    date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000))
//    document.cookie = `policy=1; expires=${date.toUTCString()}; path=/`
// }