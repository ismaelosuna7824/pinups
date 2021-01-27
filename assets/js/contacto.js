$('#contacto').on('submit', function (event) {
  $('#contacto .feedback').html('').removeClass('bg-danger bg-success');
  $('form button[type=submit]').html('<span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Enviando...');
  var formData = {
    'fakeName': $('#contacto input[name=name]').val(),
    'fakeEmail': $('#contacto input[name=email]').val(),
    'fakeWeb': $('#contacto input[name=website]').val(),
    'nombre': $('#inputNombre').val(),
    'tel': $('#inputTel').val(),
    'email': $('#inputEmail').val(),
    'ciudad': $('#inputCiudad').val(),
    'subject': $('#inputSubject').val(),
    'mensaje': $('#inputMensaje').val() //Process form

  };
  // console.log(formData)
  $.ajax({
    type: 'POST',
    url: 'contacto.php',
    data: formData,
    dataType: 'json',
    encode: true
  }).done(function(data) {
    if (!data.success) {
      if (data.errors.nombre) {
        $('input[name=inputNombre]').addClass('is-invalid');
      }
      if (data.errors.tel) {
        $('input[name=inputTel]').addClass('is-invalid');
      }
      if (data.errors.email) {
        $('input[name=inputEmail]').addClass('is-invalid');
      }
      if (data.errors.mensaje) {
        $('textarea[name=inputMensaje]').addClass('is-invalid');
      }
      $('#feedback').addClass('bg-danger').html('Favor de llenar todo el formulario.');
    } else {
      $('input, textarea').removeClass('is-invalid');
      $('#feedback').removeClass('bg-danger');
      $('#feedback').addClass('bg-success').html('Su mensaje ha sido enviado. ¡Gracias!');
      $('#contacto form')[0].reset();
    }
    $('form button[type=submit]').html('Enviar mensaje')
  })
  .catch(function(XMLHttpRequest, textStatus, errorThrown) {
    $('#contacto button[type=submit]').html('Enviar mensaje')
    $('input, textarea').removeClass('is-invalid');
    $('#feedback').removeClass('bg-success');
    $('#feedback').addClass('bg-danger').html('Hay un problema con nuestro sistema. Contáctenos al teléfono <a class="text-light" href="tel:669 2506360">669 250 63 60</a>');
    console.log(XMLHttpRequest);
    console.log(textStatus);
    console.log(errorThrown);
  })
  event.preventDefault();
});