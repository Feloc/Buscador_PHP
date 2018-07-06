function buscar(event){
  event.preventDefault();
  var ciudad = $('#selectCiudad').val();
  var tipo = $('#selectTipo').val();
  var precio = $('#rangoPrecio').val();
  var form_data = new FormData();
  form_data.append('ciudad', ciudad);
  form_data.append('tipo', tipo);
  form_data.append('precio', precio);

  $.ajax({
    url: './buscar.php',
    //dataType: 'json',
    cache: false,
    contentType: false,
    processData: false,
    data: form_data,
    type: 'post',
    success: function(response){
      $("#cont").html(response);
    },
    error: function(){
      window.location.href = '#';
    }
  })
};

$(function(){
  $('form').submit(buscar);
})
