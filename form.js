$(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      full_name: $("#full_name").val(),
      city: $("#city").val(),
      postal_code: $("#postal_code").val(),
	  address: $("#address").val(),
	  message: $("#message").val(),
    };

    $.ajax({
      type: "POST",
      url: "mail_handler.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
    })
	.fail(function (data) {
        $("form").html(
          '<div class="alert alert-danger">Could not reach server, please try again later.</div>'
        );
      });

    event.preventDefault();
  });
});