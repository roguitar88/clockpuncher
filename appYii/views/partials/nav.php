       <?php
            /*
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/application/site/index']],
                ['label' => 'About', 'url' => ['/application/site/about']],
                ['label' => 'Contact', 'url' => ['/application/site/contact']],
            ];
            if (Yii::$app->user->isGuest) { 
                $menuItems[] = ['label' => 'Signup', 'url' => ['/application/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/application/site/login']];
            } else { 
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/application/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            */
        ?>
<!-- Nav beings here -->

<div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap"  id="nosso-produto"> <!-- .site-wrap -->

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
   
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-md-3 col-xl-4  d-block">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0"><img src="<?= Yii::getAlias('@web/') ?>images/cronometro.svg" id="main-logo" /><span id="logo-text">Clock<span class="text-primary">Puncher<span class="text-black">.</span></span></span> </a></h1>
          </div>

          <div class="col-12 col-md-9 col-xl-8 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                <li><a href="<?= Yii::getAlias('@web/') ?>#nosso-produto" class="nav-link">Nosso Produto</a></li>
                <li><a href="<?= Yii::getAlias('@web/') ?>#planos" class="nav-link">Planos</a></li>
                <li class="has-children">
                  <a href="<?= Yii::getAlias('@web/') ?>#sobrenos" class="nav-link">Sobre Nós</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="<?= Yii::getAlias('@web/') ?>#sobrenos" target="_blank" class="nav-link"><span class="text-primary">Nossa Missão</span></a></li>
                    <li><a href="<?= Yii::getAlias('@web/') ?>#nossotime" class="nav-link">A Equipe</a></li>
                    <li class="has-children">
                      <a href="#">Outras Aplicações</a>
                      <ul class="dropdown">
                        <li><a href="#">Gestor Financeiro</a></li>
                        <li><a href="#">Gestor de RH</a></li>
                        <li><a href="#">Gestor Administrativo</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="<?= Yii::getAlias('@web/') ?>#depoimentos" class="nav-link">Depoimentos</a></li>
                <?php
                if (Yii::$app->user->isGuest) {
                ?>
                <li><a href="<?= Yii::getAlias('@web/') ?>login" class="nav-link">Entrar</a></li>
                <?php
                }else{
                ?>
                <li><a href="<?= Yii::getAlias('@web/') ?>logout" class="nav-link">Sair</a></li>
                <?php
                }
                ?>
                <li><a href="<?= Yii::getAlias('@web/') ?>#contato" class="nav-link">Contato</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

<!-- Nav ends here -->
