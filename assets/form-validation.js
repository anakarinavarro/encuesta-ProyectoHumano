$('#botonAgregar').click(function(){
    $("#formulario").validate({
        rules: {
          name : {
            required: true,
            minlength: 3
          }
        }
      });
});