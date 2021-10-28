$(document).ready(function () {
  let btnResponse = document.getElementById("btnResponse");

  $(document).on("click", "#btnSubmit", function (e) {
    var valid = isValidFormLogin();
    if (valid == "true") {
      
    $("#errorUser").hide();
    $("#errorPass").hide(); 
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "ajax/ajax_login.php",
        data: $("#formLogin").serialize(),
        dataType: "json",

        success: function (msg) {
          console.log(msg);
          if (msg['response'] == 'success') {
            window.location.replace("index.php");
          }
          else if (msg['response'] == 'failed') {
            btnResponse.style.display = "block";
          }

        },

        error: function (msg) {
          console.log(msg);
          alert(msg['response']);
        }


      })
    }
    else {
      switch(valid)
      {
        case '1': 
            $("#errorUser").show();
          break;
        case '2': 
            $("#errorPass").show(); 
            $("#errorUser").hide();
          break;
      }
    }


  });

  function isValidFormLogin() {
    if ($.trim($("#txtUsername").val()) == "") {
      return "1";
    }
    if ($.trim($("#txtPassword").val()) == "") {
      return "2";
    }
    return "true";
  }

});