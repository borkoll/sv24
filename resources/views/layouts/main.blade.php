<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
        ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> </div>
</div>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="/"><i class="fa fa-trash-o fa-flip-horizontal" ></i> SVALKA<span style="color:red">24</span><strong></strong></a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/" class="page-scroll">Главная</a></li>
                @yield('menu')
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
@yield('content')
<div id="footer">
    <div class="container">
        <p>Можно копировать и использовать все что захотите.</p>
    </div>
</div>


<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"> </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Title</h2>
                        <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/01-preview.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                        <ul class="list-inline">
                            <li><strong>Client</strong>: John Doe</li>
                            <li><strong>Category</strong>: Web Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"> </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Title</h2>
                        <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/02-preview.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                        <ul class="list-inline">
                            <li><strong>Client</strong>: John Doe</li>
                            <li><strong>Category</strong>: Web Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"> </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Title</h2>
                        <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/03-preview.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                        <ul class="list-inline">
                            <li><strong>Client</strong>: John Doe</li>
                            <li><strong>Category</strong>: Web Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"> </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Title</h2>
                        <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/04-preview.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                        <ul class="list-inline">
                            <li><strong>Client</strong>: John Doe</li>
                            <li><strong>Category</strong>: Web Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"> </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Title</h2>
                        <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/05-preview.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                        <ul class="list-inline">
                            <li><strong>Client</strong>: John Doe</li>
                            <li><strong>Category</strong>: Web Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"> </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Title</h2>
                        <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/06-preview.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                        <ul class="list-inline">
                            <li><strong>Client</strong>: John Doe</li>
                            <li><strong>Category</strong>: Web Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 7 -->
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"> </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Title</h2>
                        <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/07-preview.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                        <ul class="list-inline">
                            <li><strong>Client</strong>: John Doe</li>
                            <li><strong>Category</strong>: Web Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 8 -->
<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"> </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Title</h2>
                        <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/08-preview.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, sea essent iisque iudicabit te, pro no justo delicata inimicus, et oblique docendi laboramus eum. Ei minim fabulas pertinacia pro, graeco urbanitas reformidans quo id. Error congue tacimates ei vis, facer facete ius cu, audiam prodesset pri ut. Id semper fuisset vel, has dolorum menandri eu.</p>
                        <ul class="list-inline">
                            <li><strong>Client</strong>: John Doe</li>
                            <li><strong>Category</strong>: Web Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>

<script type="text/javascript" src="js/owl.carousel.js"></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js">

</script>
<script>
    $(document).ready(function() {
        $('.mp').magnificPopup({type:'image'});
    });
</script>
</body>
</html>