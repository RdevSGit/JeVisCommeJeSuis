"use strict";

function openConnexionToggle() {
  $(".connexion_toggle").slideToggle("fast");
}

// function addReview() {
//   let login = $("#login").val();
//   let password = $("#password").val();

//   $.ajax({
//     type: "POST",
//     url: "view/php/ajax/connexion_user.php",
//     data: {
//       login: login,
//       password: password,
//     },
//     success: function (data) {
//       console.log(data);
//     },
//   });
// }

function destroySession() {
  $.ajax({
    type: "GET",
    url: "view/php/ajax/destroy_session.php",
    success: function () {
      document.location.href = "index.php";
    },
  });
}

function openMobileNav() {
  $(".nav_mobile").toggleClass("raise_nav");
  $(".menu_mobile_button").toggleClass("active");
  $(".menu_mobile_button svg").toggleClass("rotate_scale");
}

function addReview() {
  let form = $(this);
  let action = form.attr("action");

  $.ajax({
    type: "POST",
    url: action,
    data: from.serialize(),
    success: function (data) {
      alert(data)
    },
  });
}

$(function () {
  $("#profil_picture").on("click", openConnexionToggle);
  $(".close_connexion_toggle").on("click", openConnexionToggle);
  $(".nav_mobile a").on("click", openMobileNav);
  $(".destroy_session").on("click", destroySession);
  $(".menu_mobile_button").on("click", openMobileNav);
  $("#add_review_form").submit(addReview);
});
