<html>
<head>
<?php
if (isset($_POST["suma"])){
//Incrementamos el valor
$conta = $_POST["suma"] + 1;
}
else{
//Valor inicial
$conta = 1;
}
if (isset($_POST["resta"])){
  //Incrementamos el valor
  $conta = $_POST["resta"] - 1;
  }
if (isset($_POST["pagina"])){
    //Incrementamos el valor
    $conta = $_POST["pagina"];
    }
$fecha = date("Y/m/d") ;
require 'simple_html_dom.php';
$html = file_get_html("https://www.lidersanantonio.cl/impresa/$fecha/full/cuerpo-principal/$conta");
$title = $html->find('section[data-page]', 0);
?>

</head>
<form name="f1" action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="hidden" name="suma" value="<?=$conta?>">
<input type="submit" value=">">
</form>
<form name="f2" action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="hidden" name="resta" value="<?=$conta?>">
<input type="submit" value="<">
</form>
<form name="f3" action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="text" name="pagina" placeholder="1 al 21">
<input type="submit" value="Ir a la pagina">
</form>
<?php echo $title ?>
</html>



