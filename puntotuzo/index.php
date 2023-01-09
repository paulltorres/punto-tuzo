<?php
include_once 'header.php';
?>

<main style="padding: 20px;">

<!--Esto es la estrucutura para publicaciones.-->
<!-- 
  <div class="postbox">
  <h3>Titulo</h3>
  <p>Descripción</p>
  <a href="http://api.whatsapp.com/send?phone=52">
    <img src="./img/whatsapp.png" width="30" height="30">
  </a>
</div> 
-->

<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "ptbd";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("La Conexión Falló: " . mysqli_connect_error());
}
?>

<?php

$sql = "SELECT * FROM publicaciones";
$result = mysqli_query($conn, $sql);

// Imprimir datos
if (mysqli_num_rows($result) > 0) {
  // Datos de salida de cada fila
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='postbox'>" . "<h3>" . $row["pTitulo"] . "</h3>" .
      "<p>" . $row["pDesc"] . "</p>" .
      "<a href='http://api.whatsapp.com/send?phone=52" . $row["pNum"] . "'> <img src='./img/whatsapp.png' width='30' height='30'> </a>" .
      "</div>" . "<br>";
  }
} else {
  echo "0 resultados";
}

mysqli_close($conn);

?>

</main>

<?php
include_once 'footer.php';
?>