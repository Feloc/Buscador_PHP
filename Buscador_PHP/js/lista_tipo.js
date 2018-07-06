function lista_tipo(){
  $.ajax({
    url: './lista_tipo.php',
    dataType: 'json',
    cache: false,
    contentType: false,
    processData: false,
    success: function(response){
      opciones(response);
    },
    error: function(){
      window.location.href = '#';
    }
  })
};


function opciones(response){
  $.each(response, function(key, value){
    $("#selectTipo").append("<option value='" + value +"'>"+ value +"</option>");
  })
};

lista_tipo();
