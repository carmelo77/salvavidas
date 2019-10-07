<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{ url('/admin') }}/img/favicon.png">

    <title>
    	@yield('title')
    </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/admin') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/admin') }}/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{ url('/admin') }}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ url('/admin') }}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ url('/admin') }}/css/owl.carousel.css" type="text/css">

    <!--right slidebar-->
    <link href="{{ url('/admin') }}/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{ url('/admin') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('/admin') }}/css/style-responsive.css" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="{{ url('/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('/tinymce/jquery.tinymce.min.js') }}"></script>
  </head>

  <body>

  <section id="container">
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <i class="fa fa-bars"></i>
              </div>
            <!--logo start-->
            <a href="{{ url('/dashboard') }}" class="logo">
              <img src="{{ url('/') }}/images/logo.png" width="125px">
            </a>
            <!--logo end-->
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{ url('/') }}/images/avatar.jpg" width="30px">
                            <span class="username">Jhon Doue</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a href="#">
                                    <i class="fa fa-cog"></i>
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}">
                                    <i class="fa fa-key"></i>
                                    Salir
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
		<aside>
			<div id="sidebar"  class="nav-collapse ">
				<ul class="sidebar-menu" id="nav-accordion">
					{{-- <li>
					  <a class="active" href="{{ url('/dashboard') }}">
					      <i class="fa fa-dashboard"></i>
					      <span>Dashboard</span>
					  </a>
					</li>

					<li class="sub-menu">
					  <a href="javascript:;" >
					      <i class="fa fa-laptop"></i>
					      <span>Layouts</span>
					  </a>
					  <ul class="sub">
					      <li><a  href="boxed_page.html">Boxed Page</a></li>
					      <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
					      <li><a  href="header-color.html">Different Color Top bar</a></li>
					      <li><a  href="mega_menu.html">Mega Menu</a></li>
					      <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
					      <li><a  href="email_template.html" target="_blank">Email Template</a></li>
					  </ul>
					</li> --}}
					<li>
						<a href="{{ url('/dashboard/courses') }}">
							<i class="fa fa-book"></i>
							<span>Cursos</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/dashboard/blog') }}">
							<i class="fa fa-indent"></i>
							<span>Blog</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/dashboard/videos') }}">
							<i class="fa fa-video-camera"></i>
							<span>Vídeos</span>
						</a>
					</li>
          <li>
            <a href="{{ url('/dashboard/proyects/clientes') }}">
              <i class="fa fa-users"></i>
              <span>Clientes</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/dashboard/proyects/distribuidores') }}">
              <i class="fa fa-bookmark"></i>
              <span>Distribuidores</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/dashboard/formations/legislacion/') }}">
              <i class="fa fa-video-camera"></i>
              <span>Legislación</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/dashboard/formations/homologacion/') }}">
              <i class="fa fa-video-camera"></i>
              <span>Homologación</span>
            </a>
          </li>
             <li>
            <a href="{{ url('/dashboard/beach/') }}">
              <i class="fa fa-video-camera"></i>
              <span>Playas</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/dashboard/questions/') }}">
              <i class="fa fa-video-camera"></i>
              <span>Preguntas y Respuestas</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/dashboard/desfibrillation/') }}">
              <i class="fa fa-video-camera"></i>
              <span>Desfibriladores</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/dashboard/infographic/') }}">
              <i class="fa fa-video-camera"></i>
              <span>Infografía</span>
            </a>
          </li>
				</ul>
			</div>
		</aside>
      <!--sidebar end-->
      <!--main content start-->
		<section id="main-content">
			<section class="wrapper">
				@yield('ct')
			</section>
		</section>
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017 © <a href="http://www.ceroideas.es/" target="_blank">ceroideas</a>
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ url('/admin') }}/js/jquery.js"></script>
    <script src="{{ url('/admin') }}/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="{{ url('/admin') }}/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{ url('/admin') }}/js/jquery.scrollTo.min.js"></script>
    <script src="{{ url('/admin') }}/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="{{ url('/admin') }}/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="{{ url('/admin') }}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="{{ url('/admin') }}/js/owl.carousel.js" ></script>
    <script src="{{ url('/admin') }}/js/jquery.customSelect.min.js" ></script>
    <script src="{{ url('/admin') }}/js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="{{ url('/admin') }}/js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="{{ url('/admin') }}/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="{{ url('/admin') }}/js/sparkline-chart.js"></script>
    <script src="{{ url('/admin') }}/js/easy-pie-chart.js"></script>
    <script src="{{ url('/admin') }}/js/count.js"></script>
  

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>

  </body>
</html>
