const url = "http://localhost:80/information-hub/php/login.php";

$(document).ready(function() {
  $("#btnLogIn").on("click", function() {
    var email = $("#inputEmail").val();
    var password = $("#inputPassword").val();

    if (!email || !password) {
      alert("please fill up all field");
    } else
      $.ajax({
        url: url,
        method: "post",
        data: {
          login: 1,
          email: email,
          password: password
        },
        success: function(response) {
          if (response.indexOf("success") >= 0) {
            window.location =
              "http://localhost:80/information-hub/php/hidden.php";
          } else {
            $("#records_content")
              .fadeIn(2000)
              .css("display", "block");
          }
        },
        error: function() {
          $("#records_content")
            .fadeIn(1000)
            .html('<div class="text-center">error here</div>');
        },
        dataType: "text"
      });
  });
});
