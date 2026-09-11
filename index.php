<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="generator" content="CoolAdmin 3.4.0"/>
    <meta name="description" content="Responsive data tables with horizontal scroll affordances and striped/hover variants."/>
    <title>Data tables | CoolAdmin Bootstrap 5 Admin Dashboard</title>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Data tables | CoolAdmin Bootstrap 5 Admin Dashboard"/>
    <meta property="og:description" content="Responsive data tables with horizontal scroll affordances and striped/hover variants."/>
    <meta property="og:image" content="screenshots/cooladmin-bootstrap-dashboard-2.png"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Data tables | CoolAdmin Bootstrap 5 Admin Dashboard"/>
    <meta name="twitter:description" content="Responsive data tables with horizontal scroll affordances and striped/hover variants."/>
    <meta name="theme-color" content="#4272d7"/>
    <link href="css/font-face.css" rel="stylesheet" media="all"/>
    <link rel="preconnect" href="https://rsms.me/"/>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css"/>
    <link href="vendor/fontawesome-7.3.1/css/all.min.css" rel="stylesheet" media="all"/>
    <link href="vendor/bootstrap-5.3.8.min.css" rel="stylesheet" media="all"/>
    <link href="vendor/tom-select/css/tom-select.bootstrap5.min.css" rel="stylesheet" media="all"/>
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all"/>
    <link href="css/theme.css" rel="stylesheet" media="all"/>
    <link href="css/app.css" rel="stylesheet" media="all"/>
    <link href="css/main.css" rel="stylesheet" media="all"/>
  </head>
  <body class="app"><a class="visually-hidden-focusable skip-link" href="#main-content">Skip to main content</a>
    <?php include_once __DIR__ . '/helpers.php'; ?>
    <div class="page-wrapper">
      
	  <?php include_once("header_top.php"); ?>
	  
      <aside class="menu-sidebar" id="main-sidebar">
        <div class="logo"><a class="logo-link" href="index.html" aria-label="CoolAdmin home"><span class="logo-mark" aria-hidden="true">J</span><span class="logo-text">NEW JeffAdmin</span></a>
          <button class="sidebar-close js-sidebar-toggle" type="button" aria-label="Close navigation"><i class="fa-solid fa-xmark" aria-hidden="true"></i></button>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
          <?php include_once("nav.php"); ?>
        </div>
      </aside>
      <div class="page-container">
	  
        <?php include_once("header.php"); ?>
		
        <main class="main-content" id="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">

<?php /*
						<div class="alert alert-primary alert-dismissible fade show shadow" role="alert">
							<i class="fa-solid fa-circle-info" style="margin-right:8px;"></i>
							<strong>Heads up</strong> — this is an informational alert with default Bootstrap styling.
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>


            <div class="row">
              <div class="col-md-4 col-sm-12 mb-3">
                  <section class="m-card notice-card notice-card--warning">
                      <span class="notice-card__icon"><i class="fa-solid fa-triangle-exclamation"></i></span>
                      <div class="notice-card__body">
                          <h3 class="notice-card__title">Storage almost full</h3>
                          <p class="notice-card__text">You’re using 82% of your 100 GB plan. Consider upgrading or pruning old projects to avoid hitting the cap.</p>
                          <div class="notice-card__actions">
                              <button type="button" class="m-btn m-btn--primary" style="height: 28px; padding: 0 10px; font-size: 12px;">Upgrade plan</button>
                          </div>
                      </div>
                  </section>
              </div>

              <div class="col-md-4 col-sm-12 mb-3">
                  <section class="m-card notice-card notice-card--warning">
                      <span class="notice-card__icon"><i class="fa-solid fa-triangle-exclamation"></i></span>
                      <div class="notice-card__body">
                          <h3 class="notice-card__title">Storage almost full</h3>
                          <p class="notice-card__text">You’re using 82% of your 100 GB plan. Consider upgrading or pruning old projects to avoid hitting the cap.</p>
                          <div class="notice-card__actions">
                              <button type="button" class="m-btn m-btn--primary" style="height: 28px; padding: 0 10px; font-size: 12px;">Upgrade plan</button>
                          </div>
                      </div>
                  </section>
              </div>
            </div>
*/ ?>



<?php 
					if(isset($_GET["m"]) && $_GET["m"] == "form"){
						include_once("form.php");
					}else{
						include_once("list.php");
					}
				?>

                <?php //include_once("footer.php"); ?>

            </div>
          </div>
        </main>
      </div>
    </div>
    <script src="js/vanilla-utils.js"></script>
    <script src="vendor/bootstrap-5.3.8.bundle.min.js"></script>
    <script src="vendor/tom-select/js/tom-select.complete.min.js"></script>
    <script src="js/bootstrap5-init.js"></script>
    <script src="js/main-vanilla.js"></script>
    <script src="js/modern-plugins.js"></script>
  </body>
</html>