<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste Grownth</title>


    <?php wp_head();?>

</head>
<body>
    <header><!-- inicio Cabecalho -->
        <nav class="navbar navbar-expand-md navbar-light navbar-transparent">
          <div class="container">
            
            <a href="index.html" class="navbar-brand">
              <img src="<?php bloginfo('template_directory');?>/imagens/moeda.svg" width="150" height="70">
            </a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
              <i class="fa-solid fa-bars text-dark"></i>
            </button>

            <div class="collapse navbar-collapse" id="nav-principal">
              <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                  <a href="" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                  <a href="" class="nav-link">Recursos</a>
                </li>

                <li class="nav-item">
                  <a href="" class="nav-link">Benefícios</a>
                </li>

                <li class="nav-item">
                  <a href="" class="nav-link btn btn-md btn-custom">Acesse sua conta</a>
                </li>

              </ul>
            </div>

          </div>
        </nav>
      </header><!--/fim Cabecalho -->