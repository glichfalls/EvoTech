function sideMenuOpen(){
  console.log('hallo1');
  $('#side-menu').animate({left: '75vw'}, 400);
}

function sideMenuClose(){
  console.log('hallo2');
  $('#side-menu').animate({left: '-75vw'}, 400);
}

if (window.matchMedia("(orientation: portrait)").matches) {
  //Portrait
  $(document).ready(function(){
    $('#menu-simulatoren').hover(function(){
      $(this).css({height: '40vh'});
      $(this).css('opacity', '1');
      $('#menu-simracing').css({height: '20vh'});
      $('#menu-events').css({height: '20vh'});
      $('#menu-rcc').css({height: '20vh'});
      $('#menu-simracing').css('opacity', '0.4')
      $('#menu-events').css('opacity', '0.4')
      $('#menu-rcc').css('opacity', '0.4')
    });
  });
  
  $(document).ready(function(){
    if($('#menu-simulatoren').css('height') && $('#menu-simracing').css('height') && $('#menu-events').css('height') && $('#menu-rcc').css('height') != '40vh') {
      $('#menu-simulatoren').css({height: '25vh'});
      $('#menu-simracing').css({height: '25vh'});
      $('#menu-events').css({height: '25vh'});
      $('#menu-rcc').css({height: '25vh'});
    }   
  }); 
  
  $(document).ready(function(){
    $('#menu-simracing').hover(function(){
      $(this).css({height: '40vh'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({height: '20vh'});
      $('#menu-events').css({height: '20vh'});
      $('#menu-rcc').css({height: '20vh'});
      $('#menu-simulatoren').css('opacity', '0.4')
      $('#menu-events').css('opacity', '0.4')
      $('#menu-rcc').css('opacity', '0.4')
    });
  });
  
  $(document).ready(function(){
    $('#menu-events').hover(function(){
      $(this).css({height: '40vh'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({height: '20vh'});
      $('#menu-simracing').css({height: '20vh'});
      $('#menu-rcc').css({height: '20vh'});
      $('#menu-simulatoren').css('opacity', '0.4')
      $('#menu-simracing').css('opacity', '0.4')
      $('#menu-rcc').css('opacity', '0.4')
    });
  });
  
  $(document).ready(function(){
    $('#menu-rcc').hover(function(){
      $(this).css({height: '40vh'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({height: '20vh'});
      $('#menu-simracing').css({height: '20vh'});
      $('#menu-events').css({height: '20vh'});
      $('#menu-simulatoren').css('opacity', '0.4')
      $('#menu-simracing').css('opacity', '0.4')
      $('#menu-events').css('opacity', '0.4')
    });
  });
} else {
  //Landscape
  $(document).ready(function(){
    $('#menu-simulatoren').hover(function(){
      $(this).css({width: '40vw'});
      $(this).css('opacity', '1');
      $('#menu-simracing').css({width: '20vw'});
      $('#menu-events').css({width: '20vw'});
      $('#menu-rcc').css({width: '20vw'});
      $('#menu-simracing').css('opacity', '0.4')
      $('#menu-events').css('opacity', '0.4')
      $('#menu-rcc').css('opacity', '0.4')
    });
  });
  
  $(document).ready(function(){
    if($('#menu-simulatoren').css('width') && $('#menu-simracing').css('height') && $('#menu-events').css('height') && $('#menu-rcc').css('height') != '40vh') {
      $('#menu-simulatoren').css({width: '25vw'});
      $('#menu-simracing').css({width: '25vw'});
      $('#menu-events').css({width: '25vw'});
      $('#menu-rcc').css({width: '25vw'});
    }   
  }); 
  
  $(document).ready(function(){
    $('#menu-simracing').hover(function(){
      $(this).css({width: '40vw'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({width: '20vw'});
      $('#menu-events').css({width: '20vw'});
      $('#menu-rcc').css({width: '20vw'});
      $('#menu-simulatoren').css('opacity', '0.4')
      $('#menu-events').css('opacity', '0.4')
      $('#menu-rcc').css('opacity', '0.4')
    });
  });
  
  $(document).ready(function(){
    $('#menu-events').hover(function(){
      $(this).css({width: '40vw'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({width: '20vw'});
      $('#menu-simracing').css({width: '20vw'});
      $('#menu-rcc').css({width: '20vw'});
      $('#menu-simulatoren').css('opacity', '0.4')
      $('#menu-simracing').css('opacity', '0.4')
      $('#menu-rcc').css('opacity', '0.4')
    });
  });
  
  $(document).ready(function(){
    $('#menu-rcc').hover(function(){
      $(this).css({width: '40vw'});
      $(this).css('opacity', '1');
      $('#menu-simulatoren').css({width: '20vw'});
      $('#menu-simracing').css({width: '20vw'});
      $('#menu-events').css({width: '20vw'});
      $('#menu-simulatoren').css('opacity', '0.4')
      $('#menu-simracing').css('opacity', '0.4')
      $('#menu-events').css('opacity', '0.4')
    });
  });
}