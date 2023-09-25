<?php include('../templates/cabecera_c.php'); ?>

<script type="text/javascript">
$('.carousel').carousel({
     interval: 3000,
     pause:true,
     wrap:false,
     keyboard:true
});
</script>

<div class="card text-center">
  <div class="card-header">
  <div class="card-body">
    <h4 class="card-title"><b>¡BIENVENIDO A XALLI!</b></h4>
    <img src="../src/XALLI 2.png" class="img-fluid rounded-top" alt="" style="midth50px;healt:100px;">
    <p class="card-text">La empresa que innova la pigmentacion</p>
  </div>
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="inf.php"><b>XALLI</b></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="Pedidos.php"><b>PEDIDOS</b></a>
      </li>
    </ul>
  </div>
</div>

<div id="myCarouselCustom" class="carousel slide" data-ride="carousel" style= "width:1200px;height:500px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarouselCustom" data-slide-to="0" class="active"></li>
        <li data-target="#myCarouselCustom" data-slide-to="1"></li>
        <li data-target="#myCarouselCustom" data-slide-to="2"></li>
        <li data-target="#myCarouselCustom" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="../src/fondo1.png" alt="" style= "width:1200px;height:500px;">
            <div class="carousel-caption">
            </div>
        </div>

        <div class="item">
            <img src="../src/Imagen2.png" alt=""  style= "width:1200px;height:500px;">
            <div class="carousel-caption">
                <h3>XALLI</h3>
                <p>Innovacion</p>
            </div>
        </div>

        <div class="item">
            <img src="../src/fondo 3.png" alt="" style= "width:1200px;height:500px;">
            <div class="carousel-caption">
                <h3>Diferente Tamaño</h3>
                <p>!Manejamos dos tamaño de bolsa!</p>
            </div>
        </div>
        
        <div class="item">
            <img src="../src/proceso.png" alt="" style= "width:1200px;height:500px;">
            <div class="carousel-caption">
                <h3>Automatizacion</h3>
                <p>Pigmentacion y envasado de arena utilizando Tecnologia 4.0</p>
            </div>
        </div>
    </div>
    <!-- Controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="sr-only">Next</span>
</a>
</div>

<?php include('../templates/pie.php'); ?>