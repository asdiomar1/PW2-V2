$(document).ready(function () {
  $(".nav li.active").removeClass("active");
  $(".nav ul.active").removeClass("active");
  $(".shop").addClass("active");

  var url = window.location.href;

  if (url.includes("category")) {
    $(".category").addClass("active");
  } else if (url.includes("single-product")) {
    $(".details").addClass("active");
  } else if (url.includes("checkout")) {
    $(".payments").addClass("active");
  } else if (url.includes("cart")) {
    $(".cart").addClass("active");
  } else if (url.includes("confirmation")) {
    $(".confirm").addClass("active");
  }
});
