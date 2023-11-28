import anime from '../node_modules/animejs/lib/anime.es.js';

$(document).ready(function(){
  var windowWidth = $(Window).width();
  var confirmsrnt = false;
  var confirmmtch = false;
$('#input-vrfy').on('input', function(){
    var Password = $('#input-strnt').val();
    var PasswordCnfrm = $('#input-vrfy').val();
    if (Password !== PasswordCnfrm) {
        $('#input-vrf-js').fadeIn(700).text('Password NOT match');
        $('#next-btn-js').fadeIn(500);
        $('#rgs-btn-js').fadeOut(500);
    } else {
        $('#input-vrf-js').text('Password match');
        confirmsrnt = true;
        if(confirmmtch === true && confirmsrnt === true){
          $('#next-btn-js').fadeOut(500);
          $('#rgs-btn-js').fadeIn(500);
        }
    }
    
});


  $('#input-strnt').on('input', function() {
    if ($(this).val().trim().length === 0) {
      $('#input-wrn-js').hide(); // Clear the warning message
    } else if ($(this).val().length < 8) {
      $('#input-wrn-js').fadeIn(700).text('Password is too short');
      $('#next-btn-js').fadeIn(500);
      $('#rgs-btn-js').fadeOut(500);
    }else{
      $('#input-wrn-js').fadeIn(500).text('great');
      setTimeout(()=>{
        $('#input-wrn-js').text('');
      },3000);
      confirmmtch = true;
      if(confirmmtch === true && confirmsrnt === true){
        $('#next-btn-js').fadeOut(500);
        $('#rgs-btn-js').fadeIn(500);
      }
    }
  });

let visibleBtn = false;
        $('#rgs-btn-js').hide();
        $('#slide2').hide();
        $('#slide3').hide();

        $('#lgn-btn-js').css('right','-100%');
        $('#clip1-js').css('right','100%');
        $('#clip2-js').css('right','100%');
        $('#clip3-js').css('right','-100%');
        
        $('#lgn-btn1-js').css('left','-100%');
        $('#clip21-js').css('left','100%');
        $('#clip22-js').css('left','100%');
        $('#clip23-js').css('left','-100%');
       
$('#crts-js').css('top', '-100%').animate({
    top: '50%'
},1000, function () {
  $('#con-logn-js').hide();
  $('#con-reg-js').hide();
  $('#next-btnlgn-js').click(function(){
    $('#inputfa').val(""); 
  });
    // Animation for #crts-js is complete
    setTimeout(function () {
        $('#crts-js').fadeOut(500, function() {
          $('#name-lg-js').click(function(){
            anime({
                targets: '.name-lg-cs',
                translateX: function(el) {
                  return el.getAttribute('data-x');
                },
                translateY: function(el, i) {
                  return 50 + (-50 * i);
                },
                scale: function(el, i, l) {
                  return (l - i) + .25;
                },
                rotate: function() { return anime.random(-360, 360); },
                borderRadius: function() { return ['50%', anime.random(10, 35) + '%']; },
                duration: function() { return anime.random(1200, 1800); },
                delay: function() { return anime.random(0, 400); },
                direction: 'alternate',
                loop: true
              });
        });
        // anime({
        //     targets: '.lgn-btn1-cs',
        //     translateX: 250
        //   });
       
         $('#name-lg-js').show().animate({
            top: '5%'
          },500);
           $('#text-js').show().animate({
            top: '18%'
          },700);
            $('#img-lg-js').show().animate({
            top: '30%'
            },700);
            
            
            $('#clip1-js').animate({
                right: '-10%'
                },1500);
                $('#clip2-js').animate({
                    right: '-15%'
                    },1000);
                    $('#clip3-js').animate({
                        right: '-20%'
                        },500);
                        $('#lgn-btn-js').animate({
                            right: '12%'
                            },500);
                            // register button
                            if(windowWidth >= 300 && windowWidth <= 1024){
                              $('#lgn-btn1-js').hide();
                              $('.text-cs').css('display','none');
                          }else{
                            $('#lgn-btn1-js').show().click(function(){
                                if(visibleBtn){
                                 $('#con-reg-js').show().animate({
                                    top: '-100%'
                                    },500);
                                    $('#con-logn-js').show().animate({
                                        top: '-100%'
                                        },500);
                                        $('#img-lg-js').css({
                                            'background-image':'url(/image/fire.jpg)',
                                            'top': '36%',
                                            'border-radius': '2rem',
                                            'top': '30%',
                                            'width': '30rem',
                                            'height': '25rem'
                                          }).hide().fadeIn();
                                          $('#text-js').css({
                                            'color':'black'
                                          },100); 
                                }else{
                                 $('#con-reg-js').show().animate({
                                    top: '25%'
                                    },500);
                                      $('#img-lg-js').css({
                                         'background-image': 'linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/image/fire.jpg)','background-position': 'center','background-repeat': 'no-repeat','background-size': 'cover','width': '100vw','height': '100vh','top':'0',  
                                  }).hide().fadeIn(500);
                                  $('#text-js').css({
                                    'color':'#b9d4c9'
                                  },500);                                    
                                }                            
                                    visibleBtn = !visibleBtn;
                            });                        
                            $('#next-btn-js').click(function(){
                                if($("#slide1").is(":visible")){
                                    $("#slide1").hide();
                                    $("#slide2").slideDown();
                                }else if($("#slide2").is(":visible")){
                                    $("#slide2").hide();
                                    $("#slide3").slideDown();
                                }else if($("#slide3").is(":visible")){
                                   
                                }
                            });
                            $('#prv-btn-js').click(function(){
                                if($("#slide2").is(":visible")){
                                    $("#slide2").hide();
                                    $("#slide1").slideDown();
                                    $("#rgs-btn-js").hide();
                                    $("#next-btn-js").show();
                                }else if($("#slide3").is(":visible")){
                                    $("#slide3").hide();
                                    $("#slide2").slideDown();
                                    $("#rgs-btn-js").hide();
                                    $("#next-btn-js").show();
                                }
                            });                    
            $('#clip21-js').animate({
                left: '-10%'
                },1500);
                $('#clip22-js').animate({
                    left: '-15%'
                    },1000);
                    $('#clip23-js').animate({
                        left: '-20%'
                        },500);
                        $('#lgn-btn1-js').animate({
                            left: '12%'
                            },500);
                          }
                            // log-in button
                            $('#lgn-btn-js').show().click(function(){
                                if(visibleBtn){
                                 $('#con-logn-js').animate({
                                    top: '-100%'
                                    },500);
                                    $('#con-reg-js').animate({
                                        top: '-100%'
                                        },500);
                                        $('#con-logn-js').animate({
                                          top: '-100%'
                                          },500);
                                          $('#img-lg-js').css({
                                              'background-image':'url(/image/fire.jpg)',
                                              'top': '36%',
                                              'border-radius': '2rem',
                                              'top': '30%',
                                              'width': '30rem',
                                              'height': '25rem'
                                            }).hide().fadeIn();
                                            $('#text-js').css({
                                              'color':'black'
                                            },100);
                                }else{
                                 $('#con-logn-js').show().animate({
                                    top: '25%'
                                    },500);
                                    $('#img-lg-js').css({
                                      'background-image': 'linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/image/fire.jpg)','background-position': 'center','background-repeat': 'no-repeat','background-size': 'cover','width': '100vw','height': '100vh','top':'0',  
                               }).hide().fadeIn(500);
                               $('#text-js').css({
                                 'color':'#b9d4c9'
                               },500); 
                                }
                                    visibleBtn = !visibleBtn;
                            });
        });
    }, 1000); // Adjust this timing as needed
});


   
});