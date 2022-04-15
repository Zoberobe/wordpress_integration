<?php get_header(); ?>


<?php $hero = get_field('section_1');?>

<section id="home"> <!-- inicio seção home -->
      <div class="container">
        <div class="row">
          <div class="d-flex col-md-6">
              <div class="align-self-center">

                <h1 class="display-4"><?php echo $hero['slogan'];?></h1>
                <p>
                <?php echo $hero['texto-abaixo-slogan'];?>
                </p>

                  <div class="input-group mb-3">
                    <input type="text" placeholder="Seu e-mail" value="<?php echo $hero['email-cadastro'];?>" class="form-control">
                    <div class="input-group-append">
                      <button type="button" class="btn btn-primary">Cadastre-se</button>
                    </div>
                  </div>
                
                <p class="mt-4"><?php echo $hero['disponivel'];?>
                  <a href="<?php echo $hero['android-link'];?>" class="btn btn-outline-light">
                  <i class="fa-brands fa-android"></i>
                  </a>
                  <a href="<?php echo $hero['ios-link'];?>" class="btn btn-outline-light">
                  <i class="fa-brands fa-apple"></i>
                  </a>
                </p>

              </div>
            </div>

          <div class="col-md-6 d-none d-md-block">
               <img src="<?php bloginfo('template_directory');?>/imagens/capa-mulher.png">
           </div>

        </div>     
      </div>
    </section> <!-- fim seção home -->

    <?php $hero = get_field('section_2');?>    

    <section class="separacao"> <!-- Inicio seção saiba -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class=" align-self-center">
              <h4><strong><?php echo $hero['titulo'];?></strong></h4>
              <h4 class="linha-roxa"><?php echo $hero['subtitulo'];?></h4>
              <p>
              <?php echo $hero['paragrafo'];?>
              </p>
              <a href="" class="btn btn-primary">Veja mais</a>
            </div>
          </div>
          <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/imagens/guardar.svg" width="660" height="420" class="img-fluid d-none d-md-block">
          </div>
        </div>
      </div>
    </section>

    <?php $hero = get_field('section_3');?>
    <section class="separacao">
      <div class="container"><!--Container -->
        <h4><strong><?php echo $hero['titulo'];?></strong></h4>
        <h4 class="linha-roxa"><?php echo $hero['subtitulo'];?></h4>
        <div class="row slider"><!--Row -->
          <div class="col-md-12 m-auto"><!--col-sm8 -->
            <div class="parceiros-borda">
              <h5><?php echo $hero['nome_acredita_empresa'];?></h5>
              <p><?php echo $hero['avaliacao_nome'];?></p>
              <img src="<?php bloginfo('template_directory');?>/imagens/Homem-Cliente1.svg">
            </div>
          </div>

          <div class="col-md-12 m-auto"><!--col-sm8 -->
            <div class="parceiros-borda">
              <h5><?php echo $hero['nome_acredita_empresa_2'];?></h5>
              <p><?php echo $hero['avaliacao_nome_2'];?></p>
              <img src="<?php bloginfo('template_directory');?>/imagens/Homem-Cliente2.svg">
            </div>
          </div>

          <div class="col-md-12 m-auto"><!--col-sm8 -->
            <div class="parceiros-borda">
              <h5><?php echo $hero['nome_acredita_empresa_3'];?></h5>
              <p><?php echo $hero['avaliacao_nome_3'];?></p>
              <img src="<?php bloginfo('template_directory');?>/imagens/Mulher-Cliente1.svg">
            </div>
          </div>

          <div class="col-md-12 m-auto"><!--col-sm8 -->
            <div class="parceiros-borda">
              <h5><?php echo $hero['nome_acredita_empresa_4'];?></h5>
              <p><?php echo $hero['avaliacao_nome_4'];?></p>
              <img src="<?php bloginfo('template_directory');?>/imagens/Mulher-Cliente2.svg">
            </div>
          </div>
          
          <div class="col-md-12 m-auto"><!--col-sm8 -->
            <div class="parceiros-borda">
              <h5><?php echo $hero['nome_acredita_empresa_5'];?></h5>
              <p><?php echo $hero['avaliacao_nome_5'];?></p>
              <img src="<?php bloginfo('template_directory');?>/imagens/Homem-Cliente1.svg">
            </div>
          </div>    
  
          </div><!--/col-sm8 -->
        </div><!--/Row -->
      </div><!--/Container -->
    </section>

    <?php $hero = get_field('section_4');?>
    <section>
      <div class="container">
        <div class="row">

          <div class="col-md-6 d-flex">
            <article id="mapa">
              <iframe class="d-none d-md-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14629.887565108078!2d-46.506636799999995!3d-23.55148965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce674ff0ee6e4d%3A0xe7923296d9043c44!2sUBS%20JARDIM%20SANTA%20MARIA!5e0!3m2!1spt-BR!2sbr!4v1638211075566!5m2!1spt-BR!2sbr" width="500" height="600" style="border:1px solid black;" allowfullscreen="" loading="lazy"></iframe>
            </article>
          </div>

          <div class="col-md-6">
            <h5 class="linha-roxa"><strong><?php echo $hero['titulo_form'];?></strong>
            <br>
            <?php echo $hero['titulo_form_2'];?>
            </h5>
            <p>
            <?php echo $hero['paragrafo_form'];?>
            </p>
            <form>
                  <div class="form-group">
                    <input type="text" placeholder="Nome" id="Nome" value="<?php echo $hero['nome_form'];?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="Email" id="Email" value="<?php echo $hero['email_form'];?>" class="form-control"> 
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Telefone" id="Telefone" value="<?php echo $hero['telefone_form'];?>" class="form-control"> 
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Mensagem" id="Mensagem" value="<?php echo $hero['text_area_form'];?>"  rows="3"></textarea>
                  </div>
                  <button type="button" class="btn btn-custom">
                    <i class="fa-regular fa-paper-plane"></i>
                    Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </section>


    <?php $hero = get_field('section_5');?>         
    <section class="espacamento">
      <form class="form-inline">
        <div class="container">
          <div class="row">
            <div class="col-md-3 d-flex ">
              <h5 class="linha-roxa"><?php echo $hero['titulo'];?></h5>
            </div>
            <div class="form-group col-md-3 ">
              <input type="text"  class="form-control" value="<?php echo $hero['nome_newsletter'];?>" id="nome-newsletter" placeholder="Nome">
            </div>
            <div class="form-group col-md-3 ">
              <input type="email" class="form-control" id="email-newsletter" value="<?php echo $hero['nome_newsletter'];?>" placeholder="Email">
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-custom ">
                <i class="fa-regular fa-paper-plane"></i>
                Enviar</button>
            </div>
          </div>
          </div>
      </form>
    </section>

    <?php get_footer(); ?>
