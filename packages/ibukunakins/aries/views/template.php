<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <?= $view->render('head') ?>
        <!-- Bootstrap core CSS -->
        <?php $view->style('bootstrap', 'theme:dist/css/bootstrap.min.css') ?>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php $view->style('ie10hack', 'theme:dist/css/ie10-viewport-bug-workaround.css') ?>
        <!-- Custom styles for this template -->
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>

        <!-- LOAD GOOGLE FONTS -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body class="boxed no-page-loader" >
  <!-- WRAPPER -->
	<div class="wrapper">

		<!-- HEADER -->
		<header id="header" class="">
			<div id="header-wrap">
				<div class="container">

					<!--LOGO-->
					<div id="logo">
						    <a class="navbar-brand logo" href="<?= $view->url()->get() ?>"><img src="<?= $this->escape($params['logo']) ?>" alt="<?= $params['title']?>" /></a>
						</a>
					</div>
					<!--END: LOGO-->

					<!--MOBILE MENU -->
					<div class="nav-main-menu-responsive">
						<button class="lines-button x" type="button" data-toggle="collapse" data-target=".main-menu-collapse">
							<span class="lines"></span>
						</button>
					</div>
					<!--END: MOBILE MENU -->


					<!--NAVIGATION-->
					<div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
						<div class="container">
							<nav id="mainMenu" class="main-menu mega-menu">
								<ul class="main-menu nav nav-pills">
                  <!-- Render menu position -->
                  <?php if ($view->menu()->exists('main')) : ?>
                  <?= $view->menu('main', 'menu-navbar.php') ?>
                  <?php endif ?>
                  <!-- /menu position -->
								</ul>
							</nav>
						</div>
					</div>
					<!--END: NAVIGATION-->
				</div>
			</div>
		</header>
		<!-- END: HEADER -->




        <!-- Hero position -->
        <?php if ($view->position()->exists('hero')) : ?>
        <?= $view->position('hero', 'position-hero.php') ?>
        <?php endif; ?>
        <!-- /Hero position -->

            <!-- Render system messages -->
            <?= $view->render('messages') ?>

            <!-- Render content -->
            <?= $view->render('content') ?>

          <!-- Middle Sections -->
          <?php if ($view->position()->exists('midsection')) : ?>
          <?= $view->position('midsection', 'position-grid.php') ?>
          <?php endif; ?>
          <!-- /Middle Sections -->

            <!-- Footer -->
            <footer  class="background-dark text-grey" id="footer">
              <div class="footer-content">
                <!-- Bottom Widgets -->
                <div class="row">
                  <div class="container">
                <?php if ($view->position()->exists('bottom')) : ?>
                <?= $view->position('bottom', 'position-bottom.php') ?>
                <?php endif; ?>
                 </div>
              </div>
              <!--/Bottom widgets-->

              <div class="copyright-content">
                  <?php if ($view->position()->exists('footer')) : ?>
                    <?= $view->position('footer', 'position-footer.php') ?>
                    <?php endif; ?>
                </div>
              </div>
            </footer>

          </div>
          <!-- END: WRAPPER -->
          <!-- GO TOP BUTTON -->
          	<a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>


  <?php $view->script('theme', 'theme:js/theme.js', 'jquery') ?>




        <!-- Insert code before the closing body tag  -->
        <?= $view->render('footer') ?>

</body>
</html>
