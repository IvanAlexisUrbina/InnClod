$(document).ready(function () {
  //LOGO responsivo 
  $(document).on("click", ".menu", function () {
    var estado = $("#logo").attr("data-estado");

    if (estado == 1) {
      $("#logo").attr("src", "build/images/logo.png");
      $("#logo").attr("width", "60px");
      $("#logo").attr("style", "");
      $("#logo").attr("data-estado", "2");
    } else {
      $("#logo").attr("src", "build/images/icono.jpg");
      $("#logo").attr("width", "100px");
      $("#logo").attr("style", "margin-left:61px");
      $("#logo").attr("data-estado", "1");
    }
  });

  $(document).ready(function () {
    var table = $('#data').DataTable({
      responsive: true,
      orderCellsTop: true,
      language: {
        "decimal": "",
        "emptyTable": "No hay datos",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        "infoEmpty": "Mostrando 0 a 0 de 0 registros",
        "infoFiltered": "(Filtro de _MAX_ registros Totales)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Numero de filas _MENU_",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "No se encontraron resultados",
        "paginate": {

          "first": "Primero",
          "last": "Ultimo",
          "next": "Proximo",
          "previous": "Anterior"
        }
      },
    });
  });

 
    $(document).on('click', '#editar', function () {
      var url = $(this).attr('data-url');
      var datos = $(this).val();
      $.ajax({
        url: url,
        type: "POST",
        success: function (datos) {
          $("#contenedor").html(datos);
          $("#modal").modal("show");
        }
      });
    });
  

  /////////////////////////////////////////////////////////

$(document).on('click', '#ventas', function () {
  var url = $(this).attr('data-url');
  $.ajax({
    url: url,
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
      $("#modal").modal("show");
    }
  });
});

$(document).on('click', '#eliminar', function () {
  var url = $(this).attr('data-url');
  $.ajax({
    url: url,
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
      $("#modal").modal("show");
    }
  });
});


    $(document).on("submit", "#registrarprod", function() {
      event.preventDefault();
      swal({
          title: '¿Desea registrar esta capacitacion?',
          text: 'Recuerde que despues puede eliminarla o editarla',
          type: 'info',
          icon: 'info',
          buttons: {
              confirm: {
                  text: 'Registrar',
                  className: 'btn btn-primary'
              },

              cancel: {
                  visible: true,
                  text: "Cancelar",
                  className: 'btn btn-danger'
              }

          }
      }).then((Delete) => {
          if (Delete) {
              $(this).submit();
          }

      });
  });
  
})


