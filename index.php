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
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all"/>
    <link href="css/theme.css" rel="stylesheet" media="all"/>
    <link href="css/app.css" rel="stylesheet" media="all"/>
  </head>
  <body class="app"><a class="visually-hidden-focusable skip-link" href="#main-content">Skip to main content</a>
    <div class="page-wrapper">
      
	  <?php include_once("header_top.php"); ?>
	  
      <aside class="menu-sidebar" id="main-sidebar">
        <div class="logo"><a class="logo-link" href="index.html" aria-label="CoolAdmin home"><span class="logo-mark" aria-hidden="true">C</span><span class="logo-text">CoolAdmin</span></a>
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

                <?php include_once("list.php"); ?>

				<!-- Footer -->
				<div class="row" style="margin-top: 28px;">
					<div class="col-md-12">
						<div class="copyright">
							<p>Copyright © 2026 Colorlib. All rights reserved. Template by <a href="https://colorlib.com" rel="nofollow" target="_blank">Colorlib</a>.</p>
						</div>
					</div>
				</div>


            </div>
          </div>
        </main>
      </div>
    </div>
    <script src="js/vanilla-utils.js"></script>
    <script src="vendor/bootstrap-5.3.8.bundle.min.js"></script>
    <script src="js/bootstrap5-init.js"></script>
    <script src="js/main-vanilla.js"></script>
    <script src="js/modern-plugins.js"></script>
  </body>
</html>