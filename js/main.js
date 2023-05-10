reqDialog = document.querySelector('.reqDialog');
tourDialog = document.querySelector('.tourDialog');

$(".regButton").on("click", () => {
  $("body").addClass("scroll-stop");
  reqDialog.showModal();
});

$(".reqClose").on("click", () => {
  $("body").removeClass("scroll-stop");
  reqDialog.close();
});

$("#formChange").on("click", () => {
  $(".formLogin").toggleClass("hide");
  $(".formReqistration").toggleClass("hide");
  $('.reqMessage').addClass('none');
  $('input').removeClass('error');
});

$("#formSecondChange").on("click", () => {
  $(".formLogin").toggleClass("hide");
  $(".formReqistration").toggleClass("hide");
  $('.reqMessage').addClass('none');
  $('input').removeClass('error');
});

$(".tourButton").on("click", () => {
  $("body").addClass("scroll-stop");
  tourDialog.showModal();
})

$(".tourClose").on("click", () => {
  $("body").removeClass("scroll-stop");
  tourDialog.close();
});

$(document).keyup((e) => {
  if (e.keyCode === 27) {
    $("body").removeClass("scroll-stop");
  }
});

$('.profileButton').on('click', () => {
  document.location.href = '/profile.php';
})

// вход

$('.loginButton').on('click', (e) => {
  e.preventDefault();

  $('input').removeClass('error');

  let email = $('input[name="email"]').val(),
    password = $('input[name="password"]').val();

  $.ajax({
    url: "vendor/signin.php",
    type: "POST",
    dataType: "json",
    data: {
      email: email,
      password: password
    },
    success(data) {

      if (data.status === true) {
        document.location.reload();
      } else {
        if (data.type === 1) {
          data.fields.forEach((field) => {
            $(`input[name="${field}"]`).addClass('error');
          });
        }
        $('.reqMessage').removeClass('none').text(data.message);
      }
    }
  });
})

// регистрация

$('.reqButton').on('click', (e) => {
  e.preventDefault();

  $('input').removeClass('error');

  let full_name = $('input[name="full_name"]').val(),
    emailReq = $('input[name="emailReq"]').val();
  passwordReq = $('input[name="passwordReq"]').val();

  let formData = new FormData();

  formData.append('full_name', full_name);
  formData.append('emailReq', emailReq);
  formData.append('passwordReq', passwordReq);

  $.ajax({
    url: 'vendor/signup.php',
    type: "POST",
    dataType: 'json',
    processData: false,
    contentType: false,
    cache: false,
    data: formData,

    success(data) {
      if (data.status) {
        $('.reqMessage').removeClass('none').text('Вы успешно зарегистрировались').addClass('success');
      } else {


        if (data.type === 1) {

          data.fields.forEach((field) => {
            $(`input[name="${field}"]`).addClass('error');
          }); 
        }
        $('.reqMessage').removeClass('none').text(data.message);
      }
    }
  })
});