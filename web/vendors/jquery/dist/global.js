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

  //form register document
  $(document).on("change", "#TIP_ID, #PRO_ID", function() {
    let type = $("#TIP_ID option:selected").attr('pre');
    let pro = $("#PRO_ID option:selected").attr('pre');
    let last_id = $("#last_id").val();
    let code = "";
    if (typeof type !== 'undefined') {
        code += type + "-";
    }
    if (typeof pro !== 'undefined') {
        code += pro + "-";
    }
    if (last_id) {
        code += last_id;
    }
    if (code !== "") {
        $("#DOC_CODIGO").val(code);
    }
});
  //form update document
  $(document).on("change", "#TIP_ID_MODAL, #PRO_ID_MODAL", function() {
    let type = $("#TIP_ID_MODAL option:selected").attr('pre');
    let pro = $("#PRO_ID_MODAL option:selected").attr('pre');
    let numCode = $("#numCode").val();
    let code = "";
    if (typeof type !== 'undefined') {
        code += type + "-";
    }
    if (typeof pro !== 'undefined') {
        code += pro + "-";
    }
    if (last_id) {
        code += numCode;
    }
    if (code !== "") {
        $("#DOC_CODIGO_MODAL").val(code);
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
    
    $(document).on('click', '#vista', function () {
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

$(document).on("click","#DeleteDocument button",function (event) {
  event.preventDefault();
  swal({
    title: "¿Estás seguro?",
    text: "Una vez eliminado, no podrás recuperar este documento.",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $('#DeleteDocument').submit();
    }
  }); 
});
   
})


