$(document).ready(function () {
  $(".nav li.active").removeClass("active");
  $(".nav ul.active").removeClass("active");
  $(".blog").addClass("active");

  var url = window.location;

  if(url.pathname == '/PW2-DaVinci/web/single-blog.php') {
    $(".dblog").addClass("active");
  } else {
    $(".fblog").addClass("active");
  }
});
