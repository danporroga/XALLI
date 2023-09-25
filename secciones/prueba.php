<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/usuarios.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Ejemplo de JavaScript</title>
<meta charset="UTF-8">
</head>
<body>

<script>
    var cont=0;
    var contd=0;
    var contt=0;
function opcionCaja()
{
  var seleccion=document.getElementById('cajas');
  let optionValue = seleccion.options[seleccion.selectedIndex].value;
  
  if(optionValue==1){
    cont = 1;
    arena()
  }
  if(optionValue != 1){
    cont = 0;
    arena()
  }
}

function opcionArena()
{
  var seleccion=document.getElementById('arena');
  let optionValue = seleccion.options[seleccion.selectedIndex].value;
  
  if(optionValue=="Mixta"){
    contd = 1;
    arena()
  }
  if(optionValue != "Mixta"){
    contd = 0;
    arena()
  }
}

function arena(){
  if(cont==1 && contd==1){
    alert("No se puede seleccionar arena Mixta si solo es una caja.");
  }
  }
</script>

<div class="col-md-8">
<div class="mb-3">
<br>
<br>
  <label for="" class="form-label">Cantidad de cajas (4 bolsas por caja)</label>
  <select name="cajas" id="cajas" onChange="opcionCaja()">
    <option value="">Selecciona cantidad</option>selected
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
  </select>
</div>

<label for="" class="form-label">Seleccione tamaño de la bolsa</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="ch1" value="option1">
  <label class="form-check-label" for="">Gruesa</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="ch2" value="option2">
  <label class="form-check-label" for="">Fina</label>
  </div>

<div class="mb-3">
  <label for="" class="form-label">Seleccione tipo</label>
  <select name="arena" id="arena" onChange="opcionArena()">
    <option selected>Tipo de Arena</option>
    <option value="Gruesa">Gruesa</option>
    <option value="Fina">Fina</option>
    <option value="Mixta">Mixta</option>
  </select>
</div>

<script>
var e = document.getElementById("seleccion");

function carta(){
  let optionValue = e.options[e.selectedIndex].value;
  if(optionValue == 1){
    alert("Hola k hace")
  }
  if(optionValue == 2){
    alert(optionValue)
  }
  if(optionValue == 3){
    alert(optionValue)
  }
}

function cambiarColor()
{
var seleccion=document.getElementById('select1');
document.getElementById('text1').value=seleccion.selectedIndex;
document.getElementById('text2').value=seleccion.options[seleccion.selectedIndex].text;
document.getElementById('text3').value=seleccion.options[seleccion.selectedIndex].value;
}
</script>

<select class="form-control" name="seleccion" id="seleccion">
    <option value="0">Seleccione el tipo de certificado</option>
    <option value="1">Carta Laboral Estandar</option>
    <option value="2">Carta Laboral Sin Salario</option>
    <option value="3">Ingresos y Retenciones 2017</option>
 </select>
 <br>
 <input type="button" name="generar" value="Imprimir" class="btn btn-danger btn-lg" onclick="carta();">

</form>
</body>
</html>

<script type="text/javascript">
$('.carousel').carousel({
     interval: 5000,
     pause:true,
     wrap:false
});
</script>

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #00ff00;">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">    </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">    </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<?php include('../templates/pie.php'); ?>

<script>
function opcionCajaG()
{
  var seleccion=document.getElementById('cajasG');
  let optionValue = seleccion.options[seleccion.selectedIndex].value;
  if(optionValue != 0){
    alert(optionValue);
  }
}

function opcionArenaG(){
  var seleccion=document.getElementById('arenaG');
  let optionValue = seleccion.options[seleccion.selectedIndex].value;
  if(optionValue != 0){
    alert(optionValue);
  }
}

function opcionCajaC()
{
  var seleccion=document.getElementById('cajasC');
  let optionValue = seleccion.options[seleccion.selectedIndex].value;
  if(optionValue != 0){
    alert(optionValue);
  }
}

function opcionArenaC(){
  var seleccion=document.getElementById('arenaC');
  let optionValue = seleccion.options[seleccion.selectedIndex].value;
  if(optionValue != 0){
    alert(optionValue);
  }
}
</script>
