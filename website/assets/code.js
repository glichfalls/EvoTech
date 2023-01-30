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
  if (vorname || nachname || email || message == "") {
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

    container.find('select').on('click', function (e) {
      const option = $(this).find('option:selected');
      const category = $(this).attr('name');
      prices[category] = Number(option.data('price'));
      $('#total').html(getTotal());
    });

  }

});


// Function for the 360 view of the product
/* (function () {
  // Linking to the other Show with the selector
  $('#product_colorway').change(function () {
    console.log(this.value)
    if (this.value == 'fragment') {
      window.location.assign('jordan_1_retro_fragment.html')
   }
   console.log(this.value)
  })

  // Setting the Image Number to 36 (amount of images)
  let imgNumber = 36
  const img = document.querySelector('#slide_1')


  if($('body').is('.travis')){
    // Interval for changing the pictures every 60ms
    setInterval(() => {
      
      // Placing a 0 in front of the Image Number if the Number is below 10
      if(imgNumber < 10) {
        img.src = `images/Sneaker/J1_Retro_Low_Travis_Scott/img0${imgNumber}.jpg`
      } else {
        img.src = `images/Sneaker/J1_Retro_Low_Travis_Scott/img${imgNumber}.jpg`
      }

      // Counting down the Image Number and repeating it by beginning with #36 again
      // Setting the Imagine Number to 1 and adding +1 would turn the product in the opposite direction
      if(imgNumber > 1) {
        imgNumber -= 1
      } else {
        imgNumber = 36
      }

    }, 60);

  } else if($('body').is('.fragment')) {
    // Linking to the other Show with the selector
    $('#product_colorway').change(function () {
      console.log(this.value)
      if (this.value == 'travis') {
        window.location.assign('jordan_1_retro_travis.html')
     }
     console.log(this.value)
    })

    // Interval for changing the pictures every 60ms
    setInterval(() => {
      
      // Placing a 0 in front of the Image Number if the Number is below 10
      if(imgNumber < 10) {
        img.src = `images/Sneaker/J1_Low_Fragment_x_Travis_Scott/img0${imgNumber}.jpg`
      } else {
        img.src = `images/Sneaker/J1_Low_Fragment_x_Travis_Scott/img${imgNumber}.jpg`
      }

      // Counting down the Image Number and repeating it by beginning with #36 again
      // Setting the Imagine Number to 1 and adding +1 would turn the product in the opposite direction
      if(imgNumber > 1) {
        imgNumber -= 1
      } else {
        imgNumber = 36
      }

    }, 60);
  }

})() */

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

// Slide right and remove class active from previous slide & add class active to current slide
$('.right').click(function() {
  
  if($('#slide_1').hasClass('active')) {

    $('.slides').find('.slide').removeClass('active')
    $('#slide_2').addClass('active')
    moveRight()

  } else if($('#slide_2').hasClass('active')) {

    $('.slides').find('.slide').removeClass('active')
    $('#slide_3').addClass('active')
    moveRight()

  }else if($('#slide_3').hasClass('active')) {

    $('.slides').find('.slide').removeClass('active')
    $('#slide_4').addClass('active')
    moveRight()

  }else if($('#slide_4').hasClass('active')) {

    $('.slides').find('.slide').removeClass('active')
    $('#slide_1').addClass('active')
    moveRight()

  }
})

// Slide left and remove class active from previous slide & add class active to current slide
$('.left').click(function() {
  
  if($('#slide_1').hasClass('active')) {

    $('.slides').find('.slide').removeClass('active')
    $('#slide_4').addClass('active')
    moveLeft()

  } else if($('#slide_2').hasClass('active')) {

    $('.slides').find('.slide').removeClass('active')
    $('#slide_1').addClass('active')
    moveLeft()

  }else if($('#slide_3').hasClass('active')) {

    $('.slides').find('.slide').removeClass('active')
    $('#slide_2').addClass('active')
    moveLeft()

  }else if($('#slide_4').hasClass('active')) {

    $('.slides').find('.slide').removeClass('active')
    $('#slide_3').addClass('active')
    moveLeft()

  }
})

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


// Form validation
/* $('.content_register form').on('submit', function (e) {
  e.preventDefault()
  $('.error-message').remove()
  $('label, select').css('color', '#4A4A4A')
  $('input, select').css('border', 'solid #707070 2px')
  const input_values = {
    colorway : $('#colorway').val(),
    size : $('#size').val(),
    firstName : $('#first_name').val(),
    lastName : $('#last_name').val(),
    street : $('#street').val(),
    city : $('#city').val(),
    phone : $('#phone').val(),
    email : $('#email').val(),
    terms : $('#terms').val(),
    newsletter : $('#newsletter').val()
  }

  const error_messages = {}

  // Validation for colorway
  if (!$('#colorway_brown').prop('checked') && !$('#colorway_blue').prop('checked')) {
    $('#colorway_name').val('')
    $('.colorway').css('color', '#bb0000')
    error_messages.colorway = 'Please choose a colorway.'
  }

  // Validation for size
  if ($('#size').val() == 0) {
    $('#size').css('border', 'solid #bb0000 2px')
    $('#size').css('color', '#bb0000')
    error_messages.size = 'Please select your size.'
  }

  // Validation for first name (emtpy field)
  if (input_values.firstName.length <= 0) {
    $('#first_name').css('border', 'solid #bb0000 2px')
    error_messages.firstName = 'Please enter your first name.'
  } else if (/\d/.test(input_values.firstName)) {
    // Validation for first name (the value has numbers in it)
    $('#first_name').val('')
    $('#first_name').css('border', 'solid #bb0000 2px')
    error_messages.firstName = 'Please enter a valid first name.'
  }

  // Validation for last name
  if (input_values.lastName.length <= 0) {
    $('#last_name').css('border', 'solid #bb0000 2px')
    error_messages.lastName = 'Please enter your last name.'
  } else if (/\d/.test(input_values.lastName)) {
    // Validation for last name (the value has numbers in it)
    $('#last_name').val('')
    $('#last_name').css('border', 'solid #bb0000 2px')
    error_messages.lastName = 'Please enter a valid last name.'
  }

  // Validation for street
  const street_pattern = /[^A-Za-z0-9]+/
  if (input_values.street.length <= 0) {
    $('#street').css('border', 'solid #bb0000 2px')
    error_messages.street = 'Please enter the street you live.'
  } else if (input_values.street.length > 0) {
    // Validation for street (special characters)
    if(!street_pattern.test(input_values.street)) {
      $('#street').val('')
      $('#street').css('border', 'solid #bb0000 2px')
      error_messages.street = 'Please enter a valid street name.'
    }
  }

  // Validation for city
  const city_pattern = /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/
  if (input_values.city.length <= 0) {
    $('#city').css('border', 'solid #bb0000 2px')
    error_messages.city = 'Please enter the city you live in.'
  } else if (input_values.city.length > 0) {
    // Validation for city (special characters)
    if(!city_pattern.test(input_values.city)) {
      $('#city').val('')
      $('#city').css('border', 'solid #bb0000 2px')
      error_messages.city = 'Please enter a valid city name.'
    }
  }

  // Validation for phone
  const phone_pattern = /(\b(0041|0)|\B\+41)(\s?\(0\))?(\s)?[1-9]{2}(\s)?[0-9]{3}(\s)?[0-9]{2}(\s)?[0-9]{2}\b/
  if (input_values.phone.length <= 0) {
    $('#phone').css('border', 'solid #bb0000 2px')
    error_messages.phone = 'Please enter your phone number.'
  } else if (input_values.phone.length > 0) {
    if(!phone_pattern.test(input_values.phone)){
      $('#phone').val('')
      $('#phone').css('border', 'solid #bb0000 2px')
      error_messages.phone = 'Please enter your correct phone number.'
    }
  }

  // Validation for email address
  const email_pattern = /(?:((?:[\w-]+(?:\.[\w-]+)*)@(?:(?:[\w-]+\.)*\w[\w-]{0,66})\.(?:[a-z]{2,6}(?:\.[a-z]{2})?));*)/g
  if (input_values.email.length <= 0) {
    $('#email').css('border', 'solid #bb0000 2px')
    error_messages.email = 'Please enter your email address'
  } else if (!email_pattern.test(input_values.email)) {
  // Is the input an actual email
    $('#email').val('')
    $('#email').css('border', 'solid #bb0000 2px')
    error_messages.email = 'Your email address does not seem to be real'
  }

  // Valdiation for terms and services checkbox
  if (!$('#terms').prop('checked')) {
    error_messages.terms = 'Please accept the terms and services.'
    $('.checkbox terms label').css('color', '#bb0000')
  }

  // Generate error messages
  if (!$.isEmptyObject(error_messages)) {
    if ( error_messages.colorway ) {
      $('.colorway').after(`<span class="error-message" style="color: #bb0000;">${error_messages.colorway}</span>`)
    }

    if ( error_messages.size ) {
      $('#size').after(`<span class="error-message" style="color: #bb0000;">${error_messages.size}</span>`)
    }

    if ( error_messages.firstName ) {
      $('#first_name').after(`<span class="error-message" style="color: #bb0000;">${error_messages.firstName}</span>`)
    }

    if ( error_messages.lastName ) {
      $('#last_name').after(`<span class="error-message" style="color: #bb0000;">${error_messages.lastName}</span>`)
    }

    if ( error_messages.street ) {
      $('#street').after(`<span class="error-message" style="color: #bb0000;">${error_messages.street}</span>`)
    }

    if ( error_messages.city ) {
      $('#city').after(`<span class="error-message" style="color: #bb0000;">${error_messages.city}</span>`)
    }
    
    if ( error_messages.phone ) {
      $('#phone').after(`<span class="error-message" style="color: #bb0000;">${error_messages.phone}</span>`)
    }

    if ( error_messages.email ) {
      $('#email').after(`<span class="error-message" style="color: #bb0000;">${error_messages.email}</span>`)
    }

    if ( error_messages.terms ) {
      $('.terms').after(`<span class="error-message" style="color: #bb0000;">${error_messages.terms}</span>`)
    }
    
  } else {

    setTimeout(function () {
      $('.loading-container').html('Success, you are registered.')
    }, )
  }

}) */