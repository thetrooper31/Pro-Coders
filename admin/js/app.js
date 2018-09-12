$(document).ready(function () {
$('.sidebar-menu').tree()

    

        $('#registros').DataTable({
        'paging'      : true,
        'pageLength'  : 8,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        'language': {
             paginate: {
                     next: 'Siguiente',
                     previous: 'Anterior'
             },
             info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
             emptyTable: 'No hay registros',
             infoEmpty: '0 Registros',
             search: 'Buscar: '
        }
});



$('#crear-registro_admin').attr('disabled', true);

$('#repetir_password').on('input', function() { // Blur para que la verifique al pinchar fuera del input
        var password_nuevo = $('#password').val();

        if($(this).val() == password_nuevo) { // If que comprueba que las contraseñas sean iguales
           $('#resultado_password').text('Correcto');
           $('#resultado_password').parents('.form-group').addClass('has-success').removeClass('has-error');
           $('input#password').parents('.form-group').addClass('has-success').removeClass('has-error');
           $('#crear-registro_admin').attr('disabled', false);
        } else {
           $('#resultado_password').text('Las contraseñas no coinciden...!!!'); 
           $('#resultado_password').parents('.form-group').addClass('has-error').removeClass('has-success');
           $('input#password').parents('.form-group').addClass('has-error').removeClass('has-success');
        }
});

       //Date picker
        $('#fecha').datepicker({
        autoclose: true
      });
        //Select2 Elements
    $('.seleccionar').select2()

      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      });

      //Fontawesome-iconpicker
      $('#icono').iconpicker();

    
})
