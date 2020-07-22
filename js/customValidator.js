$(document).ready(function () {
  //customer_register
  $('.customer_register').validate({
    rules: {
      eEmail: {
        required: true,
        email: true,
      },
      ePassword: {
        minlength: 7,
        required: true,
      },
    },
    success: function (element) {
      element.text('OK!').addClass('valid');
    },
  });
});
