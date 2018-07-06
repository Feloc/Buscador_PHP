<?php
require('library.php');

$data = getData();

foreach ($data as $value) {
  $tipo = $value['Tipo'];
  $lista[] = $tipo;
}

$result = array_unique($lista);
sort($result);


echo json_encode($result);

/*
foreach ($result as $value) {?>
  <option value='<?php echo $value?>'><?php echo $value?></option>
  <?php
}*/





 ?>
