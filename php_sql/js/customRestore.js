$(document).ready(function () {
  let btnResponse = document.getElementById("btnResponse");

  $(document).on("click", "#btnSubmit", function (e) {
    //var valid = isValidFormRestore();
    // AGGIUNGERE LA LINEA SOPRA E METTERE A POSTO I CONTROLLI REGEX
    valid = true;
    if (valid == true) {
      $("#errorEmail").hide();  
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "ajax/ajax_restore.php", 
        data: $("#formRestore").serialize(),
        dataType: "json",

        success: function (msg) {
          console.log(msg);
          if (msg['response'] == 'success') {
            btnResponse.style.display = "block";
            btnResponse.className = '';
            btnResponse.classList.add('divResponseSuccess');
          }
          else if (msg['response'] == 'failed') {
            btnResponse.style.display = "block";
            btnResponse.classList.add('divResponseError');
          }
          else if(msg['response']=='failedEmailNotFound'){
            btnResponse.style.display = "block";
            btnResponse.innerHTML = "L'Email inserita non appartiene a nessun Account";
            btnResponse.className = '';
            btnResponse.classList.add('divResponseError');
          }

        },

        error: function (msg) {
          console.log(msg);
          if (msg['response'] == 'failedEmailNotFound') {
            btnResponse.style.display = "block";
            btnResponse.innerHTML = "L'Email inserita non appartiene a nessun Account";
            btnResponse.className = '';
            btnResponse.classList.add('divResponseError');
          }
        }


      })
    }
    else if(valid == "empty" || valid == "notEmail"){
      $("#errorEmail").show(); 
      if(valid == "empty")
        $("#errorEmail").html("Inserire Email");
      else
        $("#errorEmail").html("Inserire Una mail Nel formato corretto: example@domain.com/it...");
    }
  });

  function isValidFormRestore() {
    let regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    regex = regex.test(String($("#txtEmail")).toLowerCase());
    if ($.trim($("#txtEmail").val()) == "") {
      console.log($("#txtEmail"));
      console.log($.trim($("#txtEmail").val()))
      return "empty";
    }else if(!regex)
      return "notEmail"; 
    return true;
  }
});