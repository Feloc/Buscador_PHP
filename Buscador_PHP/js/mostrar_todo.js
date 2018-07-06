function mostrarTodo(){
  $("#mostrarTodos").click(function(){
    $.ajax({
      url: "mostrar_todo.php",
      //dataType: "json",
      type: 'post',
      success: function(response){
        $("#cont").html(response);
      },
      error: function(){
        window.location.href = '#';
      }
    })
  })
};

mostrarTodo();
