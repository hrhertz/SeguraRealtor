
<html>
  <head>
    <title></title>


<?php

$file = 'mlsnumber.txt';

$MLSIDA = file_get_contents($file);

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://vow.mlspin.com/idx/Details.aspx?mls=' . $MLSIDA . '&aid=CN207021">';

?>

</head>
  <body>
  </body>
</html>


