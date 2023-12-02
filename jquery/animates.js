$(document).ready(function(){
    $('#img-cost-js').css('left','-40%');
    $('#btn-cont-js').css('left','-100%');
    $('#hover-cont-js').css({'right':'-40%','opacity':'0.4'});
    $('#title-text-js').hide();
    $('#title-text-js').slideDown(500);
    
    $('#img-cost-js').animate({
      top: '50px',
      left: '5%'
    },2000);
    $('#btn-cont-js').animate({
        top: '90px',
        left: '-30%'
      },1800,function(){
        $('#hover-cont-js').animate({
            opacity: '1'
        },1000);
      });
      $('#hover-cont-js').animate({
        top: '40px',
        left: '-10%'
    },2000);

// slides animations
    $('#slide2').hide();
    $('#slide3').hide();

    $('#btn-nxt').click(function(){
      if($("#slide1").is(":visible")){
        $('#slide2').slideDown(500);
        $('#slide1').slideUp(500);
      }else if($("#slide2").is(":visible")){
        $('#slide3').slideDown(500);
        $('#slide2').slideUp(500);
      }
    });
    $('#btn-prv').click(function(){
      if($("#slide3").is(":visible")){
        $('#slide2').slideDown(500);
        $('#slide3').slideUp(500);
      }else if($("#slide2").is(":visible")){
        $('#slide1').slideDown(500);
        $('#slide2').slideUp(500);
      }
    });
  //log in boxes
  $('#lgn-box').css('bottom','-50%').hide();
  $('#lgn-btn').click(function(){
    $('#head-text').text('Log-in');
    $('#submit-lgn-js').text('Log-in');
    $('#lgn-box').show().animate({
      left:'50%',
      top:'-35%'
    },1000);
    $('#sgn-box').animate({
      left:'200%'
    });
  });
  $('#sgn-btn').click(function(){
    $('#head-text').text('Sign Up');
    $('#sgn-box').show().animate({
      left:'50%',
      top:'35%'
    },1000);
    $('#lgn-box').animate({
      top:'100%'
    },1000);
  });
  $('#left-half').css('left','-100%');
  $('#right-half').css('right','-100%');
  $('#left-half').animate({
    left : '0'
  },1000);
  $('#right-half').animate({
    right : '0'
  },1000);
  

  
});