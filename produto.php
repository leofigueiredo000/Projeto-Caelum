</head>

<body>

  <?php
  $cabecalho_title = "Produto da Mirror Fashion";
  include("cabecalho.php");
  ?>
  <div class="container">
    <div class="produto">

      <h1>Fuzzy Cardigan</h1>
      <p>Por apenas R$ 129,00</p>


      <form>
        <fieldset class="cores">
          <legend>Escolha a cor:</legend>

          <input type="radio" name="cor" id="verde" value="verde" checked>
          <label for="verde">
            <img src="img/produtos/foto2-verde.png" alt="verde">
          </label>

          <input type="radio" name="cor" id="rosa" value="rosa checked">
          <label for="rosa">
            <img src="img/produtos/foto2-rosa.png" alt="rosa">
          </label>

          <input type="radio" name="cor" id="azul" value="azul">
          <label for="azul">
            <img src="img/produtos/foto2-azul.png" alt="azul">
          </label>

        </fieldset>
        <input type="submit" class="comprar" value="Comprar">
      </form>

    </div>
  </div>



  <?php include("rodape.php") ?>
</body>

</html>