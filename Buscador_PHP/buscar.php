<?php
  require('library.php');

  $ciudad = $_POST['ciudad'];
  $tipo = $_POST['tipo'];
  $precio = $_POST['precio'];
  $precios = explode(";", $precio);
  $precio1 = ($precios[0]);
  $precio2 = ($precios[1]);

  $data = getData();

  if ($ciudad != "" && $tipo == "") {
    foreach ($data as $key => $value) {
      if ($ciudad==$value['Ciudad']) {
        $reemplazo = ["$", ","];
        $a_reemplazar = $value['Precio'];
        $final = str_replace($reemplazo, "", $a_reemplazar);
        if ($final>$precio1 && $final < $precio2) {
          ?>
          <div class="col s12 l12">
              <div class="card horizontal">
                <div class="card-image">
                  <img src="img/home.jpg">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <ul>
                      <!--<li><?php //echo "Id: ".$value['Id']?></li>-->
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
      }
    }
  }


  if ($ciudad == "" && $tipo != "") {
    foreach ($data as $key => $value) {
      if ($tipo==$value['Tipo']) {
        $reemplazo = ["$", ","];
        $a_reemplazar = $value['Precio'];
        $final = str_replace($reemplazo, "", $a_reemplazar);
        if ($final>$precio1 && $final < $precio2) {
          ?>
          <div class="col s12 l12">
              <div class="card horizontal">
                <div class="card-image">
                  <img src="img/home.jpg">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <ul>
                      <!--<li><?php //echo "Id: ".$value['Id']?></li>-->
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
      }
    }
  }


  foreach($data as $key => $value){
    if ($ciudad==$value['Ciudad']) {
      if ($tipo==$value['Tipo']) {
        $reemplazo = ["$", ","];
        $a_reemplazar = $value['Precio'];
        $final = str_replace($reemplazo, "", $a_reemplazar);
        ?>
        <?php
        if ($final>$precio1 && $final < $precio2) {
        ?>
          <div class="col s12 l12">
              <div class="card horizontal">
                <div class="card-image">
                  <img src="img/home.jpg">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <ul>
                      <!--<li><?php //echo "Id: ".$value['Id']?></li>-->
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
      }
    }
}

?>
