<?php

function getData(){
  $data_file = fopen("./data/data-1.json","r");
  $data_readed = fread($data_file, filesize("./data/data-1.json"));
  $data = json_decode($data_readed, true);
  fclose($data_file);
  return $data;
}

?>
