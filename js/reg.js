const url = "http://localhost:80/information-hub/php/reg.php";

$(document).ready(function() {
  function fillEmptyInAllField() {
    $("#firstName").val("");
    $("#lastName").val("");
    $("#email").val("");
    $("#inputBirthDay").val("");
    $("#occupation").val("");
    $("#male").prop("checked", true);
    $("#inputPassword").val("");
  }

  $("#btnRegSubmit").on("click", function() {
    var firstName = $("#firstName").val();
    var lastName = $("#lastName").val();
    var email = $("#email").val();
    var birthDay = $("#inputBirthDay").val();
    var occupation = $("#occupation").val();
    var gender = $("input[name=gender]:checked").val();
    var password = $("#inputPassword").val();

    if (
      !firstName ||
      !lastName ||
      !email ||
      !birthDay ||
      !occupation ||
      !gender ||
      !password
    ) {
      console.log(
        firstName +
          " " +
          lastName +
          " " +
          email +
          " " +
          birthDay +
          " " +
          occupation +
          " " +
          gender +
          " " +
          password
      );
      alert("please fill up all field");
    } else
      $.ajax({
        url: url,
        method: "post",
        data: {
          login: "1",
          firstName: firstName,
          lastName: lastName,
          email: email,
          birthDay: birthDay,
          occupation: occupation,
          gender: gender,
          password: password
        },
        success: function(response) {
          if (response.indexOf("success") >= 0) {
            $.confirm({
              columnClass: "col-md-6 col-md-offset-3",
              theme: "dark",
              title: "Thanks for your registration..",
              content: "do you want to go login page ?",
              buttons: {
                confirm: function() {
                  window.location =
                    "http://localhost:80/information-hub/php/hidden.php";
                },
                cancel: function() {
                  fillEmptyInAllField();
                }
              }
            });
          } else {
            alert("error happend");
          }
        },
        error: function() {},
        dataType: "text"
      });
  });
});
