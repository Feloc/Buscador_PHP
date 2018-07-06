function lista_ciudad(){
  $.ajax({
    url: './lista_ciudad.php',
    dataType: 'json',
    cache: false,
    contentType: false,
    processData: false,
    success: function(response){
      opciones_ciudad(response);
    },
    error: function(){
      window.location.href = '#';
    }
  })
};


function opciones_ciudad(response){
  $.each(response, function(key, value){
    $("#selectCiudad").append("<option value='" + value +"'>"+ value +"</option>");
  })
};

lista_ciudad();
