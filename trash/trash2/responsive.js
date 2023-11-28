$(document).ready(function(){

    $(window).on('resize', function(){
        var windowWidth = $(Window).width();
        if(windowWidth >= 300 && windowWidth <= 1024){
            $('#lgn-btn1-js').hide();
            $('body').css('overflow', 'hidden');
        }else{
            $('#lgn-btn1-js').fadeIn(1000);
        }
    });

});