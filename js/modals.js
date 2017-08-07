//script para borrar el formulario del modal login
$("#modal-login").on('hidden.bs.modal', function () {
  $('#login')[0].reset();
});

$("#modal-login").on('show.bs.modal', function () {
  $('#focus-login').focus();
});

//script para borrar el formulario del modal bolsa
$("#modal-contact-form").on('hidden.bs.modal', function () {
  $('#formulario')[0].reset();
});

$("#modal-contact-from").on('show.bs.modal', function () {
  $('#focus-bolsa').focus();
});


//script para birrar formulario de modal curos

$("#modal-curso-form").on('hidden.bs.modal', function () {
  $('#formulario')[0].reset();
});

$("#modal-cursa-fro").on('show.bs.modal', function () {
  $('#focus-curso').focus();
});
