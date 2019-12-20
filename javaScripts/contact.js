// var formatOptions = {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'};
// // now.toLocaleDateString("fa-IR", formatOptions); 

// function myDate() {
//     var d = new Date();
//     var n = d.toLocaleDateString("fa-IR", formatOptions);
//     // var t = d.toLocaleTimeString("fa-IR")
//     document.getElementById("date").innerHTML = n;
//     // document.getElementById("time").innerHTML = t;
//   };

// myDate();

// setInterval(function myTime(){  
//   var d = new Date();
//   var n = d.toLocaleDateString("fa-IR", formatOptions);
//   var t = d.toLocaleTimeString("fa-IR")
//   // document.getElementById("date").innerHTML = n;
//   document.getElementById("time").innerHTML = t;

//   });
// // myTime();


// $('.tabs li').click(function () {

//   $('.tabs li').removeClass('Active');
//   $(this).addClass('Active');

//   var index = $(this).index();
//   $('.tabs-content section').fadeOut(0);
//   $('.tabs-content section').eq(index).fadeIn(250);
// })
// $('.log-btn').click(function (){

//     $('.title-of-login').fadeIn(500);
//     $('.body-cover').fadeIn(500);
  
//   })

var myMap = new ol.Map({
    target: 'map',
    key: 'web.mPttfbJe4SdnCGZpsWwQF6NnIrg6zzkVpOpEZ8S4',
    maptype: 'dreamy-gold',
    poi: true,
    traffic: true,
    view: new ol.View({
        center: ol.proj.fromLonLat([50.835609,35.676598]),
        zoom: 16
    })
});


// var myMap = new L.Map('map', {
//     key: 'web.mPttfbJe4SdnCGZpsWwQF6NnIrg6zzkVpOpEZ8S4',
//     maptype: 'dreamy',
//     poi: true,
//     traffic: true,
//     center: [50.835609,35.676598],
//     zoom: 16
// });

// $("#email-btn").click(function() {
//     if (($(".email-input").val() === "")) {
//         $("#error-email").slideDown();
//     } else {
//         $("#error-email").slideUp();
//     }
// });


// $(window).on('click', function(e) {

//     let $target = $(e.target);

//     if (!$target.is('.email-button') &&
//         !$target.parents('.email-button').length
//     ) {
//         $('#error-email').fadeOut('slow');
//     }

// });