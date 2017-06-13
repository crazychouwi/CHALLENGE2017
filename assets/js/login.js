function verifier(pw, vpassword ){


      return false;

}

$(document).ready(function(){

  var $prenom = $('#prenom'),
         $pw = $('#pw'),
         $vpassword = $('#vpassword'),
         $email = $('#email'),
         $register = $("#register");

	$("#button").click(function(){
    console.log($("#pw").val());

		if ($("#nom").val() == "") {
			alert("Merci de saisir votre nom");
			$("#nom").focus();
			return false;
		}
	
		if ($("#email").val() == "" ) {
			alert("Merci de saisir votre adresse email correcte");
			$("#email").focus();
			return false;
		}

		if ($("#pw").val() == "") {
			alert("Merci de saisir votre mot de passe");
			$("#pw").focus();
			return false;
		}
		if ($("#vpassword").val() == "") {
			alert("Merci de saisir la vérification de votre mot de passe");
			$("#vpassword").focus();
			return false;
		}
    if ($("#vpassword").val() != $("#pw").val()) {
			alert("Merci de saisir la vérification de votre mot de passe");
			$("#vpassword").focus();
			return false;
		}

	});

  $vpassword.keyup(function() {
    if ($(this).val() != $pw.val()){
    $(this).css({
      color :'orange',
    });
  }
  else{
    $(this).css({
      color :'purple',
    });
  }
  });
    // alert( "Handler for .keyup() called." );

});
