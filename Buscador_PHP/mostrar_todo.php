<?php
require('library.php');

$data = getData();

foreach($data as $value){
?>

<div class="col s12 l12">
    <div class="card horizontal">
      <div class="card-image">
        <img src="img/home.jpg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <ul>
            <li><?php echo "Direccion: ".$value['Direccion']?></li>
            <li><?php echo "Ciudad: ".$value['Ciudad']?></li>
            <li><?php echo "Telefono: ".$value['Telefono']?></li>
            <li><?php echo "Código Postál: ".$value['Codigo_Postal']?></li>
            <li><?php echo "Tipo: ".$value['Tipo']?></li>
            <li class="precioTexto"><?php echo "Precio: ".$value['Precio']?></li>
          </ul>
        </div>
        <div class="card-action">
          <a href="#arriba">Arriba</a>
        </div>
      </div>
    </div>
</div>
<?php
}
?>
