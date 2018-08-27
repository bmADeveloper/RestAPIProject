$(document).ready(function(){

                //Navigation Bar click
	$(".navbar-burger").click(function() {
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");
  	});





    //SignUp click
    $("#showModal_signup").click(function() {
        $(".modal").addClass("is-active");
    });
              //Close SignUp Modal
    $(".delete").click(function() {
        $(".modal").removeClass("is-active");
    });
















});

