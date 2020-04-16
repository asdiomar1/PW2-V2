$(document).ready(function () {
  $(".nav li.active").removeClass("active");
  $(".nav ul.active").removeClass("active");
  $(".pages").addClass("active");

  var url = window.location.href;

  if (url.includes("login")) {
    $(".login").addClass("active");
  } else if (url.includes("tracking")) {
    $(".tracking").addClass("active");
  } else if (url.includes("elements")) {
    $(".elements").addClass("active");
  }
});
