// VALIDACION DEL TEXT AREA
$(document).ready(function() {
    $('#DOC_CONTENIDO').on('input', function() {
        let maxLength = 4000;
        let length = $(this).val().length;
        if (length > maxLength) {
            $(this).val($(this).val().substring(0, maxLength));
            $('#error').text('El texto no puede tener más de 4000 caracteres');
        } else {
            $('#error').text('');
        }
    });
});

// EL REGISTRO DEL FORMULARIO DE DOCUMENTO CON SU VALIDACION
$(document).ready(function() {
  let formulario = $('#registrar');
  let inputs = formulario.find('input[type="text"]');
  let selects = formulario.find('select');
  let textarea = formulario.find('textarea');
  formulario.submit(function(event) {
    event.preventDefault();
    if (!camposLlenos(inputs) || !selectoresSeleccionados(selects) || !campoLleno(textarea)) {
      alert('Por favor, complete todos los campos.'); 
    } else {       
      swal({
        title: '¿Desea registrar este Documento?',
        text: 'Recuerde que despues puede eliminarlo o editarlo',
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
      }).then((confirmado) => {
        if (confirmado) {
          formulario.off('submit');
          formulario.submit();
        } else {
          swal({
            title: 'Registro cancelado',
            text: 'El documento no ha sido registrado.',
            type: 'info',
            icon: 'info',
            buttons: {
              confirm: {
                text: 'Aceptar',
                className: 'btn btn-primary'
              }
            }
          });
        }
      });
    }
  });
});
// VALIDACIONES DE LOS CAMPOS QUE ESTEN COMPLETAMENTE LLENOSS
  function camposLlenos(campos) {
    let llenos = true;
    campos.each(function() {
      if ($(this).val() === '') {
        llenos = false;
        return false;
      }
    });
    return llenos;
  } 
  function selectoresSeleccionados(selectores) {
    let seleccionados = true;
    selectores.each(function() {
      if ($(this).val() === null) {
        seleccionados = false;
        return false; 
      }
    });
    return seleccionados;
  }
function campoLleno(campo) {
    if (campo.val() === '') {
      return false;
    } else {
      return true;
    }
  }



