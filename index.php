<!-- CABEÇALHO-->
<?php 
$cabecalho_title = "Mirror Fashion";
include("cabecalho.php"); 
?>
<!-- CABECALHO-->

<div class="container destaque">
  <section class="busca">
    <h2>Busca</h2>
    <form>
      <input type="search" />
      <input type="image" src="img/busca.png" />
    </form>
  </section>
  <!--fim .busca-->

  <section class="menu-departamentos">
    <h2>Departamentos</h2>

    <nav>
      <ul>
        <li>
          <a href="#">Blusas e camisas</a>
          <ul>
            <li><a href="#">Manga curta</a></li>
            <li><a href="#">Manga comprida</a></li>
            <li><a href="#">Camisa social</a></li>
            <li><a href="#">Camisa casual</a></li>
          </ul>
        </li>

        <li><a href="#">Calças</a></li>
        <li><a href="#">Saias</a></li>
        <li><a href="#"> Vestidos</a></li>
        <li><a href="#">Sapatos</a></li>
        <li><a href="#">Bolsas e Carteiras</a></li>
        <li><a href="#">Acessórios</a></li>
      </ul>
    </nav>
  </section>
  <!-- fim .menu-departamentos-->

  <img src="img/destaque-home.png" alt="Promoção: Big City Night" />
</div>
<!-- fim .container .destaque-->

<div class="container paineis">
  <!--os paineis de novidades e mais vendidos entrarão aqui-->

  <section class="painel novidades">
    <h2>Novidades</h2>

    <ol>
      <!-- Produto 1-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura1.png" alt="" />
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>
        </a>
      </li>

      <!--coloque mais produtos aqui!-->
      <!-- Produto 2-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura2.png" alt="" />
            <figcaption>Malha Azul com Estampa R$29,99</figcaption>
          </figure>
        </a>
      </li>
      <!-- Produto 3-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura3.png" alt="" />
            <figcaption>Casaco da Vó R$ 49,90</figcaption>
          </figure>
        </a>
      </li>
      <!-- Produto 4-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura4.png" alt="" />
            <figcaption>Jaqueta de Esquiar R$ 199,90</figcaption>
          </figure>
        </a>
      </li>
      <!-- Produto 5-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura5.png" alt="" />
            <figcaption>Roupa de ginastica R$ 59,90</figcaption>
          </figure>
        </a>
      </li>
      <!-- Produto 6-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura6.png" alt="" />

            <figcaption>Brusinha R$39,99</figcaption>
          </figure>
        </a>
      </li>
    </ol>
  </section>
  <section class="painel mais-vendidos">
    <h2>Mais Vendidos</h2>
    <ol>
      <!--mais vendidos 1-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura7.png" alt="" />
            <figcaption>Brusinha R$ 29,99</figcaption>
          </figure>
        </a>
      </li>
      <!--mais vendidos 2-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura8.png" alt="" />
            <figcaption>Calca e blusa R$ 49,99</figcaption>
          </figure>
        </a>
      </li>
      <!--mais vendidos 3-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura9.png" alt="" />
            <figcaption>Blusa festa junida R$ 50,00</figcaption>
          </figure>
        </a>
      </li>
      <!--mais vendidos 4-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura10.png" alt="" />
            <figcaption>Blusa rosa R$ 29,90</figcaption>
          </figure>
        </a>
      </li>
      <!--mais vendidos 5-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura11.png" alt="" />
            <figcaption>Short verde R$ 29,99</figcaption>
          </figure>
        </a>
      </li>
      <!--mais vendidos 6-->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura12.png" alt="" />
            <figcaption>Blusa de velha azul R$29,90</figcaption>
          </figure>
        </a>
      </li>
    </ol>
    <!--Fim mais vendidos-->
  </section>
</div>

<!-- RODAPÉ -->
<?php include("rodape.php") ?>
<!-- RODAPÉ -->
</body>

</html>