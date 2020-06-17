$("#enviar_comentario").click(function () {
  $("#fecha").val(new Date().toLocaleString());
  var fecha = $("#fecha").val(),
    nombre = $("#name_comment").val(),
    comment = $("#message_comment").val(),
    id_producto = $("#id_producto").val();

  $.ajax({
    url: "inc/functions/comentarios.php",
    data: { name: nombre, message: comment, date: fecha, id_producto: id_producto },
    type: "POST",
    dataType: "json",
    success: function (output) {
      location.reload();
    },
    error: function (xhr, status, error) {
      var err = xhr.responseText;
      console.log(err);
    },
  });
});
