$('#personalAccBtn').on('click', function() {

    $('#infoAccount').fadeToggle();

});

$(window).on('click', function(e) {

    var $target = $(e.target);

    if (!$target.is('.info-account') &&
        !$target.is('.info-account-li')&&
        !$target.is('#personalAccBtn')
    ) {
        $('.info-account').fadeOut(500);
    }

});
