<?php
require('library.php');

$data = getData();

foreach ($data as $value) {
  $ciudad = $value['Ciudad'];
  $lista[] = $ciudad;
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
