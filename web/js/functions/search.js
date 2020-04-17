var textBox = document.getElementById("search_input"),
  resultContainer = document.getElementById("searchResult");

var ajax = null;

$("#search_input").keyup(
  delay(function (e) {
    var val = this.value;
    val = val.replace(/^\s|\s $/, "");
    //Elimino espacios al principio y al final del texto

    if (val !== "") {
      searchForData(val, true);
    } else {
      clearResult();
    }

    function searchForData(value, isLoadMoreMode) {
      if (ajax && typeof ajax.abort === "function") {
        ajax.abort(); // abort previous requests
      }

      if (isLoadMoreMode !== true) {
        clearResult();
      }

      $.ajax({
        type: "POST",
        dataType: "json",
        url: "inc/functions/livesearch.php",
        data: { searchText: value },
        success: function (data) {
          console.log(data);

          if (data != null && !data.includes("funciono", data)) {
            resultContainer.innerHTML = "";
            showProducts(data);
          }
        },
        error: function (xhr, status, error) {
          var err = xhr.responseText;
          console.log(err);
          noProducts();
        }
      });
    }

    function showProducts(data) {
      function createRow(rowData) {
        var wrap = document.createElement("div");
        wrap.classList.add('row', 'mb-30');

        var name = document.createElement("span");
        name.innerHTML = rowData.name;

        var pictureHolder = document.createElement("div");
        var picture = document.createElement("img");
        picture.src = "img/product/" + rowData.picture;
        picture.setAttribute("width", "60px");
        picture.setAttribute("height", "60px");

        pictureHolder.appendChild(picture);
        wrap.appendChild(pictureHolder);
        wrap.appendChild(name);
        resultContainer.appendChild(wrap);
      }

      for (var i = 0, len = data.length; i < len; i++) {
        var productData = data[i];
        createRow(productData.product);
      }
    }

    function noProducts() {
      resultContainer.innerHTML = "No se encontraron productos";
    }

    function clearResult() {
      resultContainer.innerHTML = "";
    }
  }, 500)
);

function delay(callback, ms) {
  var timer = 0;
  return function () {
    var context = this,
      args = arguments;
    clearTimeout(timer);
    timer = setTimeout(function () {
      callback.apply(context, args);
    }, ms || 0);
  };
}
