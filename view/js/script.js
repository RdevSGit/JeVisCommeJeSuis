"use strict";

function openConnexionToggle() {
  $(".connexion_toggle").slideToggle("fast");
}

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
      alert(data);
    },
  });
}

function addservice() {
  let form = $(this);
  let action = form.attr("action");
  $.ajax({
    type: "POST",
    url: action,
    data: from.serialize(),
    success: function (data) {
      alert(data);
    },
  });
}

function deleteThis() {
  let id = $(this).attr("name");
  let table = $(this).attr("class");
  $(this).parents("ul").slideToggle("");
  $.ajax({
    type: "POST",
    url: "view/php/ajax/remove_review_service.php",
    data: {
      id: id,
      table: table,
    },
  });
}

function backToHomePage() {
  document.location.href = "index.php";
}
function transformNav() {

  if (window.scrollY >= 50) {
    $("nav").addClass("transform");
    $("nav a").addClass("color");

  } else {
    $("nav").removeClass("transform");
    $("nav a").removeClass("color");

  }
}
$(function () {
  $("#profil_picture").on("click", openConnexionToggle);
  $(".close_connexion_toggle").on("click", openConnexionToggle);
  $(".nav_mobile a").on("click", openMobileNav);
  $(".destroy_session").on("click", destroySession);
  $(".open_menu").on("click", openMobileNav);
  $("#add_review_form").submit(addReview);
  $("#add_service_form").submit(addservice);
  $(".list svg").on("click", deleteThis);
  $(".back").on("click", backToHomePage);
  $(document).on("scroll", transformNav);
});
