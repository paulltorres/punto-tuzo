<?php
include_once 'header.php';
?>

<div class="bform">
  <form action="include/newpost.inc.php" method="post">
    <label for="pTitulo">¿Que vas a ofrecer?</label>
    <input type="text" id="pTitulo" name="pTitulo"><br><br>
    <label for="pDesc">Descripción</label>
    <textarea id="pDesc" name="pDesc" rows="4" cols="50"
      placeholder="Describe lo que vas a vender/ofrecer..."></textarea><br><br>
    <label for="pNum">WhatsApp</label>
    <input type="text" id="pNum" name="pNum" placeholder="Coloca un numero que tenga WhatsApp."><br><br>
    <input type="submit" name="submit" value="Publicar">
  </form>
</div>

<script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js');
  }
</script>

</body>

</html>