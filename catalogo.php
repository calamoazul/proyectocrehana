<?php
include ("templates/header.php");
?>
   <div class="catalogo">
    <h1>Catálogo de Ediciones Hati</h1>
    <section class="muestra">
      <img class="libro" src="images/hijosdeldestino.jpg">
      <form method=post action="hijos-del-destino.php">
        <input class="botoncatalogo" type="submit" value="Información">
      </form>
     <img class="libro" src="images/primetime.png">
     <form method=post action="prime-time.php">
       <input class="botoncatalogo" type="submit" value="Información">
     </form>
     <img class="libro" src="images/ishi.jpg">
     <form method=post action="ishi-va-a-la-escuela.php">
      <input class="botoncatalogo" type="submit" value="Información">
    </form>
   <section class="muestra">
  </div>
<?php include ("templates/footer.php");?>
