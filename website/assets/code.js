function accordion(id) {
  $('#' + id).toggleClass('show');
}

function sideMenuOpen(){
  $('#side-menu').animate({left: '75vw'}, 400);
}

function sideMenuClose(){
  $('#side-menu').animate({left: '-75vw'}, 400);
}

function validateForm() {
  let vorname = $('#vorname').val();
  let nachname = $('#nachname').val();
  let email = $('#email').val();
  let message = $('#message').val();
  if (vorname === "" || nachname === "" || email === "" || message === "") {
    alert("Bitte füllen Sie alle Felder aus.");
    return false;
  }
}

window.addEventListener("orientationchange", function() {
  orientationChanged();
});

function orientationChanged() {
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
}

orientationChanged();

$(document).ready(function() {

  const container = $('#form-container');

  if (container) {

    const prices = {};

    const getTotal = () => {
      return Object.values(prices).reduce((previousValue, currentValue) => previousValue + currentValue, 0);
    };

    container.find('select').on('change', function (e) {
      const option = $(this).find('option:selected');
      const category = $(this).attr('name');
      prices[category] = Number(option.data('price'));
      const newTotal = getTotal();
      console.log(newTotal);
      $('#total').html(newTotal);
    });

  }

});


// Show first Slide
$('.slide').last().prependTo('.slideshow .slides')

// Responsible for right movement
function moveRight () {

$('.slides').animate({
    'left': '-=40vw'
  }, 
  0, 
  function () {
    $('.slides').css('left', '')
    $('.slide').first().appendTo('.slides')
  })

}

// Responsible for left movement
function moveLeft () {

  $('.slides').animate({
    'left': '+=40vw'
  }, 
  0, 
  function () {
    $('.slides').css('left', '')
    $('.slide').last().prependTo('.slides')
  })

}

// Changing the active slide on Thumbnail_1 click
$("#thumbnail_1").click(function() {
  
  if($('#slide_2').hasClass('active')) {
    moveLeft()
  }
  
  if($('#slide_3').hasClass('active')) {
    moveLeft()
    moveLeft()
  }
  
  if($('#slide_4').hasClass('active')) {
    moveRight()
  }
  
  // Removing the 'active' class from every other slide and adding it to slide 1
  $('.slides').find('.slide').removeClass('active')
  $('#slide_1').addClass('active')
})

// Changing the active slide on Thumbnail_2 click
$('#thumbnail_2').click(function() {
  
  if($('#slide_1').hasClass('active')) {
    moveRight()
  }
  
  if($('#slide_3').hasClass('active')) {
    moveLeft()
  }
  
  if($('#slide_4').hasClass('active')) {
    moveLeft()
    moveLeft()
  }
  
  // Removing the 'active' class from every other slide and adding it to slide 2
  $('.slides').find('.slide').removeClass('active')
  $('#slide_2').addClass('active')
})

// Changing the active slide on Thumbnail_3 click
$('#thumbnail_3').click(function() {
  
  if($('#slide_1').hasClass('active')) {
    moveLeft()
    moveLeft()
  }
  
  if($('#slide_2').hasClass('active')) {
    moveRight()
  }
  
  if($('#slide_4').hasClass('active')) {
    moveLeft()
  }
  
  // Removing the 'active' class from every other slide and adding it to slide 3
  $('.slides').find('.slide').removeClass('active')
  $('#slide_3').addClass('active')
})

// Changing the active slide on Thumbnail_4 click
$('#thumbnail_4').click(function() {
  
  if($('#slide_1').hasClass('active')) {
    moveLeft()
  }
  
  if($('#slide_2').hasClass('active')) {
    moveLeft()
    moveLeft()
  }
  
  if($('#slide_3').hasClass('active')) {
    moveRight()
  }
  
  // Removing the 'active' class from every other slide and adding it to slide 4
  $('.slides').find('.slide').removeClass('active')
  $('#slide_4').addClass('active')
})