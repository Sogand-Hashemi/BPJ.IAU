// new persianDate().format(); // "۱۳۹۶-۰۱-۱۱ ۲۳:۳۳:۲۷ ب ظ" (when i run in my console)
// persianDate.toLeapYearMode('algorithmic')

// new persianDate([1396,6,17]).format('dddd');

var formatOptions = {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'};
// now.toLocaleDateString("fa-IR", formatOptions); 

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
var n = d.toLocaleDateString("fa-IR", formatOptions);
var t = d.toLocaleTimeString("fa-IR")
// document.getElementById("date").innerHTML = n;
document.getElementById("time").innerHTML = t;

});



$('.tabs li').click(function () {

  $('.tabs li').removeClass('Active');
  $(this).addClass('Active');

  var index = $(this).index();
  $('.tabs-content section').fadeOut(0);
  $('.tabs-content section').eq(index).fadeIn(250);
})

$('.log-btn').click(function (){

  $('.title-of-login').fadeIn(500);
  $('.body-cover').fadeIn(500);

})

$('.body-cover').click(function (){

  $('.title-of-login').fadeOut(500);
  $('.body-cover').fadeOut(500);

})