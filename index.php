<!DOCTYPE html>
<html>
<?php include_once 'functions/globals.php'; ?>
<?php include_once 'views/includes/head.php' ?>
<?php include_once './models/Repositorio.php' ?>
<body>
  <?php include_once 'views/includes/navbar.php' ?>

  <div class="row medium-8 large-7 columns">
    <?php foreach (Repositorio::getFrases() as $frase): ?>
        <div class="blog-post effect1">
            <p>
                <?php
                    echo $frase['nome_livro'];
                ?>
            </p>
            <div class="callout">
                <!-- Your share button code -->
                <div class="fb-share-button"
                  data-href="http://www.mensagensprontas.com.br/id"
                  data-layout="button">
                </div>
            </div>
        </div>
      <?php endforeach; ?>
  </div>
  <?php include_once 'views/includes/js.php' ?>
</body>
</html>
