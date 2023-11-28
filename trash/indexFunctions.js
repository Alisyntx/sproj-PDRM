
$(document).ready(function(){
    $('#reg-form-js').css('margin-left','-700px');
   $('#ctn1-btn1-js').click(function(){
        $('#content2s').animate({ marginLeft: '900px',},1000 ,function(){
        $('#content2s').hide();
        });
        $('#slide2').hide();
    var mediaQuery = window.matchMedia("(min-width: 300px) and (max-width: 1024px)");
     function checkMediaQuery() {
      if (mediaQuery.matches) {
        $('#reg-form-js').animate({
        marginLeft: '10px'
      }, 1000);
      }else{
        $("#reg-form-js").animate({
        marginLeft: '700px'
      }, 1000);
        $('#btn-submit-js').hide();
        $('#btnSlide').click(function(){
          $('#slide1').hide();
          $('#slide2').slideDown(1000);
          $('#btn-submit-js').slideDown(1000);
          $('#btnSlide').slideUp(1000);
        });
        $('#login-con').slideUp(1000);
        $('#cnt1-btn2-js').click(function(){
          $("#login-con").slideDown(500);
       });
    }
  }
  checkMediaQuery();
   });



   $('#login-con').css('margin-left','-700px');
   $('#cnt1-btn2-js').click(function(){
      $("#login-con").animate({
        marginLeft: '700px'
      }, 1000);
      $('#content2s').animate({ marginLeft: '900px',},1000 ,function(){
        $('#content2s').hide();
        });
   });
    


   




});