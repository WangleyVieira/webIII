<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Cadastrar dados veiculas</title>
  </head>
  <body>
    <div class="container">
      <h1>Cadastrar dados do veículo</h1>
      <form class="row g-3">
        <div class="col-md-3">
          <label for="validationDefault01" class="form-label">Placa</label>
          <input type="text" class="form-control" id="validationDefault01" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault02" class="form-label">Nome veículo</label>
          <input type="text" class="form-control" id="validationDefault02" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault03" class="form-label">Cor</label>
          <input type="text" class="form-control" id="validationDefault03" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Modelo</label>
          <input type="text" class="form-control" id="validationDefault05" required>
        </div>
        <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Tipo carro</label>
            <select class="form-select" id="validationTooltip04" required>
              <option selected disabled value="">Choose...</option>
              <option>...</option>
            </select>
            <div class="invalid-tooltip">
              Please select a valid state.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationDefault05" class="form-label">Ano modelo</label>
            <input type="date" class="form-control" id="validationDefault05" required>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Próximo</button>
        </div>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>