<?php

/* funkce načte aktuální kurzy ze stránky ČNB
  @return - dvourozměrné s unformacemi o jednotlivých kurzech.
  [0] => země
  [1] => měna
  [2] => množství
  [3] => kód
  [4] => kurz
*/
  function load_kurzy_cnb()
  {
    $kurzy_rows = file("https://www.cnb.cz/cs/financni-trhy/devizovy-trh/kurzy-devizoveho-trhu/kurzy-devizoveho-trhu/denni_kurz.txt");
    foreach ($kurzy_rows as $row) {
      $data = explode("|",$row);
      if (isset($data[4])){
        $data[4] = str_replace(",",".",$data[4]);
      }
      $kurzy_data[]=$data;
    }
    return $kurzy_data;
  }



 ?>
