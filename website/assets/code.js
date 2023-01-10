function sideMenuOpen(){
  $('#side-menu').animate({left: '75vw'}, 400);
}

function sideMenuClose(){
  $('#side-menu').animate({left: '-75vw'}, 400);
}

/* function validateForm() {
  let vorname = document.forms["contact"]["vorname"].value;
  let nachname = document.forms["contact"]["nachname"].value;
  let email = document.forms["contact"]["email"].value;
  let message = document.forms["contact"]["message"].value;
  if (vorname || nachname || email || message == "") {
    alert("Bitte füllen Sie alle Felder aus.");
    return false;
  }
} */

/* $(document).ready(function() {
  $('.desktop-nav a').click(function(e) {
    $('.desktop-nav span .active').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
});
 */

if (window.matchMedia("(orientation: portrait)").matches) {
  //Portrait
  $(document).ready(function(){
    if($('#menu-simulatoren').css('height') && $('#menu-simracing').css('height') && $('#menu-events').css('height') != '40vh') {
      $('#menu-simulatoren').css({height: 'calc(100vh/3)'});
      $('#menu-simracing').css({height: 'calc(100vh/3)'});
      $('#menu-events').css({height: 'calc(100vh/3)'});
      /* $('#menu-rcc').css({height: '25vh'}); */
    }   
  });

  $(document).ready(function(){
    $('#menu-simulatoren').hover(function(){
      $(this).css({height: '50vh'});
      $(this).css('opacity', '1');
      $('#menu-simracing').css({height: '25vh'});
      $('#menu-events').css({height: '25vh'});
      $('#menu-rcc').css({height: '25vh'});
      $('#menu-simracing').css('opacity', '0.15');
      $('#menu-events').css('opacity', '0.15');
      $('#menu-rcc').css('opacity', '0.15');
    });
  }); 
  
  $(document).ready(function(){
    $('#menu-simracing').hover(function(){
      $(this).css({height: '50vh'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({height: '25vh'});
      $('#menu-events').css({height: '25vh'});
      $('#menu-rcc').css({height: '25vh'});
      $('#menu-simulatoren').css('opacity', '0.15');
      $('#menu-events').css('opacity', '0.15');
      $('#menu-rcc').css('opacity', '0.15');
    });
  });
  
  $(document).ready(function(){
    $('#menu-events').hover(function(){
      $(this).css({height: '50vh'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({height: '25vh'});
      $('#menu-simracing').css({height: '25vh'});
      $('#menu-rcc').css({height: '25vh'});
      $('#menu-simulatoren').css('opacity', '0.15');
      $('#menu-simracing').css('opacity', '0.15');
      $('#menu-rcc').css('opacity', '0.15');
    });
  });
  
  /* $(document).ready(function(){
    $('#menu-rcc').hover(function(){
      $(this).css({height: '50vh'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({height: '25vh'});
      $('#menu-simracing').css({height: '25vh'});
      $('#menu-events').css({height: '25vh'});
      $('#menu-simulatoren').css('opacity', '0.15');
      $('#menu-simracing').css('opacity', '0.15');
      $('#menu-events').css('opacity', '0.15');
    });
  }); */
} else {
  //Landscape
  $(document).ready(function(){
    if($('#menu-simulatoren').css('width') && $('#menu-simracing').css('height') != '40vh') {
      $('#menu-simulatoren').css({width: 'calc(100vw/3)'});
      $('#menu-simracing').css({width: 'calc(100vw/3)'});
      $('#menu-events').css({width: 'calc(100vw/3)'});
      /* $('#menu-rcc').css({width: '25vw'}); */
    }   
  });

  $(document).ready(function(){
    $('#menu-simulatoren').hover(function(){
      $(this).css({width: '50vw'});
      $(this).css('opacity', '1');
      $('#menu-simracing').css({width: '25vw'});
      $('#menu-events').css({width: '25vw'});
      $('#menu-rcc').css({width: '25vw'});
      $('#menu-simracing').css('opacity', '0.15');
      $('#menu-events').css('opacity', '0.15');
      $('#menu-rcc').css('opacity', '0.15');
    });
  });
  
  $(document).ready(function(){
    $('#menu-simracing').hover(function(){
      $(this).css({width: '50vw'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({width: '25vw'});
      $('#menu-events').css({width: '25vw'});
      $('#menu-rcc').css({width: '25vw'});
      $('#menu-simulatoren').css('opacity', '0.15');
      $('#menu-events').css('opacity', '0.15');
      $('#menu-rcc').css('opacity', '0.15');
    });
  });
  
  $(document).ready(function(){
    $('#menu-events').hover(function(){
      $(this).css({width: '50vw'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({width: '25vw'});
      $('#menu-simracing').css({width: '25vw'});
      $('#menu-rcc').css({width: '25vw'});
      $('#menu-simulatoren').css('opacity', '0.15');
      $('#menu-simracing').css('opacity', '0.15');
      $('#menu-rcc').css('opacity', '0.15');
    });
  });
  
  /* $(document).ready(function(){
    $('#menu-rcc').hover(function(){
      $(this).css({width: '50vw'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({width: '25vw'});
      $('#menu-simracing').css({width: '25vw'});
      $('#menu-events').css({width: '25vw'});
      $('#menu-simulatoren').css('opacity', '0.15');
      $('#menu-simracing').css('opacity', '0.15');
      $('#menu-events').css('opacity', '0.15');
    });
  }); */
}