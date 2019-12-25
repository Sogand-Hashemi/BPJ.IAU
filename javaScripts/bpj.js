
var formatOptions = {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'};


function myDate() {
  var d = new Date();
  var n = d.toLocaleDateString("fa-IR", formatOptions);
  // var t = d.toLocaleTimeString("fa-IR")
  document.getElementById("date").innerHTML = n;
  // document.getElementById("time").innerHTML = t;
};

myDate();

setInterval(function myTime(){  
var d = new Date();
// var n = d.toLocaleDateString("fa-IR", formatOptions);
var t = d.toLocaleTimeString("fa-IR")
// document.getElementById("date").innerHTML = n;
document.getElementById("time").innerHTML = t;

});



// $('.tabs li').click(function () {
//
//   $('.tabs li').removeClass('Active');
//   $(this).addClass('Active');
//
//   var index = $(this).index();
//   $('.tabs-content section').fadeOut(0);
//   $('.tabs-content section').eq(index).fadeIn(250);
// });

// $('.log-btn').click(function (){
//
//   $('.title-of-login').fadeIn(500);
//   $('.body-cover').fadeIn(500);
//   $('#map').fadeout(500);
//
// })
//
// $('.body-cover').click(function (){
//
//   $('.title-of-login').fadeOut(500);
//   $('.body-cover').fadeOut(500);
//
// })

// $('.workshop-title').on('click', function(){
//   $('.workshop').slideUp();
//   if ($(this).next().is(':hidden')){
//       $(this).next().slideDown();
//   }
// })