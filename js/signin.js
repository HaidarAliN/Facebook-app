$( document ).ready(function() {

$("form").submit(function(e){
    e.preventDefault();
});

function isEmail(email) {
    var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return EmailRegex.test(email);
  }

$("#signup").click(function(){
    var name = $('#full_name').val();
    var email = $('#email').val();
    var pass = $('#password').val();
    var cpass = $('#confirm-password').val();
    var formElement = document.getElementById("signupf");
    if(name.length > 3 && isEmail(email) && (pass == cpass) && pass.length > 3){
        formElement.submit();
    }

  });

  $("#singin").click(function(){
    var emaillog = $('#email_log').val();
    var passlog = $('#pass_log').val();
    var formElement = document.getElementById("logf");


    if(isEmail(emaillog) && passlog.length > 3){
        formElement.submit();

    }

  });


});