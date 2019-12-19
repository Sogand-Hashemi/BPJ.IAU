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
// myTime();


$('.tabs li').click(function () {

  $('.tabs li').removeClass('Active');
  $(this).addClass('Active');

  var index = $(this).index();
  $('.tabs-content section').fadeOut(0);
  $('.tabs-content section').eq(index).fadeIn(250);
})