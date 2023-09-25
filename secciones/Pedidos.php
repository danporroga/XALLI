<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/usuarios.php'); ?>

<div class="row">
<form action="" method="post">
  <div class="card">
    <div class="card-header">
      Realice su pedido
    </div>
    <div class="card-body">
        <div class="col-md-12">
        <div class="mb-3">
          <label for="" class="form-label"><b>Bolsa Grande</b></label>
          <br>
            <label for="" class="form-label">Cantidad de cajas (4 bolsas por caja)</label>
            <select class="form-select form-select-lg" name="cajasG" id="cajasG" onChange="opcionCajaG()">
              <option value="0">Selecciona cantidad</option>selected
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Tipo de Arena</label>
            <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ch1" value="option1"disabled checked>
            <label class="form-check-label" for="">Gruesa</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ch2" value="option2"disabled>
            <label class="form-check-label" for="">Fina</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Tamaño de la bolsa</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ch1" value="option1"disabled checked>
            <label class="form-check-label" for="">Grande</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ch2" value="option2"disabled>
            <label class="form-check-label" for="">Chica</label>
          </div>
        </div>

        <div class="mb-3">
          <br>
          <br>
          <label for="" class="form-label"><b>Bolsa Chica</b></label>
          <br>
            <label for="" class="form-label">Cantidad de cajas (4 bolsas por caja)</label>
            <select class="form-select form-select-lg" name="cajasC" id="cajasC" onChange="opcionCajaC()">
              <option value="0">Selecciona cantidad</option>selected
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Tipo de Arena</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ch1" value="option1"disabled >
            <label class="form-check-label" for="">Gruesa</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ch2" value="option2"disabled checked>
            <label class="form-check-label" for="">Fina</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Tamaño de la bolsa</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ch1" value="option1"disabled>
            <label class="form-check-label" for="">Grande</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ch2" value="option2"disabled checked>
            <label class="form-check-label" for="">Chica</label>
            </div>
          </div>
      </div>

      <div class="col-md-8">
        <div class="mb-3">
          <label for="" class="form-label"><b>Direccion de envio</b></label>
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control" name="Nombre" id="Nombre" placeholder="e.j Ana Lisa Melo">
            <label for="formId1">Nombre completo</label>
          </div>
        </div>

        <div class="mb-3">
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control" name="Calle" id="Calle" placeholder="e.j Calle 20 de Noviembre">
            <label for="formId1">Calle</label>
          </div>
        </div>

        <div class="col-4">
          <div class="md-3">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="NumInterior" id="NumInterior" placeholder="e.j s/n">
              <label for="formId1">Numero Interior</label>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="md-3">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="NumExterior" id="NumExterior" placeholder="e.j #45">
              <label for="formId1">Numero Exterior</label>
            </div>
          </div>
        </div>

        <div class="col-8">
          <div class="md-3">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="Colonia" id="Colonia" placeholder="e.j San Bartolome Costecho">
              <label for="formId1">Colonia</label>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="md-3">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="CP" id="CP" placeholder="e.j 90500">
              <label for="formId1">Codigo Postal</label>
            </div>
          </div>
        </div>

        <div class="col-5">
          <div class="md-3">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="Municipio" id="Municipio" placeholder="e.j Huamantla">
              <label for="formId1">Municipio</label>
            </div>
          </div>
        </div>

        <div class="col-5">
          <div class="md-3">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="Estado" id="Estado" placeholder="e.j Tlaxcala">
              <label for="formId1">Estado</label>
            </div>
          </div>
        </div>

        <div class="col-5">
          <div class="md-3">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="Pais" id="Pais" placeholder="e.j Mexico">
              <label for="formId1">Pais</label>
            </div>
          </div>
        </div>

        <div class="col-5">
          <div class="md-3">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="ref" id="ref" placeholder="e.j Entre calle y calle">
              <label for="formId1">Referencias</label>
            </div>
          </div>
        </div>

      </div>
      </div>
    </div>
  </div>

<div class="col-12">
  <div class="d-flex my-2 my-lg-0">
    <label for="formId1">Antes de ordenar, verifique bien sus datos______________________________________</label>
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Ordenar</button>
    <label for="formId1">______________________________________________________________________</label>
  </div>
</div>
</div>
</form>
<?php include('../templates/pie.php'); ?>
