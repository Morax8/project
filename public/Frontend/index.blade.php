<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager" />
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de" />

    <title>

    </title>

    <!-- normalize core CSS -->
    <link href="{{ asset('Frontend/css/normalize.css') }}" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('Frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Frontend/bootstrap/css/carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('Frontend/bootstrap/fonts/glyphicons-halflings-regular.eot') }}" rel="stylesheet" />

    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{--
    <link href="{{ asset('Frontend/bootstrap/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet" />

    <script src="{{ asset('Frontend/bootstrap/js/ie-emulation-modes-warning.js') }}"></script> --}}

    <!-- Google Fonts - Change if needed -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,700,300,600" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- maps -->
    <script src="https://www.bing.com/api/maps/mapcontrol?callback=initMap" async defer></script>

    <!-- Menu shrinking -->
    <script type="text/javascript" src="{{ asset('Frontend/js/menu.js') }}"></script>

    <!-- Main styles of this template -->
    <link href="{{ asset('Frontend/css/style.min.css?v=1.0.0') }}" rel="stylesheet" />

    <!-- Custom CSS. Input here your changes -->
    <link href="{{ asset('Frontend/css/custom.css') }}" rel="stylesheet" />
</head>


<body>
    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html"><img class="logo" src="{{ asset('Frontend/img/logo.png') }}" alt="Logo" /></a>
            </div>
            <nav class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Main Page</li>
                            <li class="active"><a href="index.html">Index</a></li>
                            <li class="dropdown-header">Alternative Headers</li>
                            <li><a href="index-header-hero.html">Hero Image</a></li>
                            <li><a href="index-header-product.html">Product Feature</a></li>
                            <li><a href="index-header-newsletter.html">Newsletter</a></li>
                            <li>
                                <a href="index-header-carousel.html">Classic Carousel</a>
                            </li>
                            <li><a href="index-header-video.html">Video</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Company</li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="sales-page.html">Sales Page</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Creative</li>
                            <li><a href="about-me.html">About Me</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-item.html">Portfolio Item</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Page Layouts<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Page Layouts</li>
                            <li><a href="full-width.html">Full Width</a></li>
                            <li><a href="right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="left-sidebar.html">Left Sidebar</a></li>
                            <li>
                                <a href="right-left-sidebar.html">Right &amp; Left Sidebar</a>
                            </li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li><a href="components.html">Components</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Standard Layout</li>
                            <li>
                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                            </li>
                            <li><a href="blog-single-post.html">Blog Single Post</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Creative Layout</li>
                            <li><a href="blog-full-width.html">Blog No Sidebar</a></li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </div>

    <!-- Hero Header -->
    <header class="hero-header" style="background-image: url('http://placehold.it/1900x1250')">
        <div class="intro-text text-center">
            <div class="intro-lead-in">Welcome To Elsa!</div>
            <div class="intro-heading">
                A beautiful and clean HTML template
            </div>
            <a href="#intro" class="btn btn-primary btn-lg">See More</a>
        </div>
    </header>

    <!-- Intro -->
    <section class="page-section" id="intro">
        <div class="container intro">
            <!-- First Row - Heading and Subheading -->
            <div class="row margin-bottom-50">
                <div class="col-md-12 text-center">
                    <h1 class="title-section">
                        <span class="title-regular">Elsa is a <strong>multipurpose</strong></span><br />
                        HTML Template on ThemeForest.
                    </h1>
                    <hr class="title-underline-center" />
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consetetur sadipscing
                        elitr, <br />
                        sed diam nonumy eirmod tempor invidunt ut labore et
                        dolore magna
                    </p>
                </div>
            </div>

            <!-- Second Row - Three Columns -->
            <div class="row text-center">
                <!-- Column 1 -->
                <div class="col-md-4">
                    <div>
                        <i class="fa fa-desktop"></i>
                        <label><strong>14</strong> <br />Complete
                            Projects</label>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore
                        </p>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-md-4">
                    <div>
                        <i class="fa fa-user"></i>
                        <label><strong>2543</strong> <br />Happy
                            Clients</label>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore
                        </p>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4">
                    <div>
                        <i class="fa fa-code"></i>
                        <label><strong>14489</strong> <br />Line Of
                            Coding</label>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio / Projects -->
    <section class="page-section-no-padding">
        <!-- /3 Column Portfolio -->
        <div class="filter-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h1>3 Column Portfolio</h1>
                        <div class="filter-container isotopeFilters">
                            <ul class="list-inline filter">
                                <li class="active">
                                    <a href="#" data-filter="*">All </a><span>/</span>
                                </li>
                                <li>
                                    <a href="#" data-filter=".illustrations">Illustrations</a><span>/</span>
                                </li>
                                <li>
                                    <a href="#" data-filter=".photography">Photography</a><span>/</span>
                                </li>
                                <li>
                                    <a href="#" data-filter=".websites">Websites</a><span>/</span>
                                </li>
                                <li>
                                    <a href="#" data-filter=".art">Art</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-section port-col">
            <div class="row">
                <div class="isotopeContainer">
                    <div class="col-md-4 isotopeSelector photography">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="" />
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>
                                                    Lorem ipsum dolor sit
                                                    amet, consetetur
                                                    sadipscing elitr, sed
                                                    diam nonumy eirmod
                                                    tempor invidunt ut
                                                    labore et dolore...
                                                </p>
                                                <p>
                                                    <a title="Project Image" class="fancybox-pop fancybox.image"
                                                        href="http://placehold.it/625x450"><i
                                                            class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i
                                                            class="fa fa-link fa-border fa-2x"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-4 isotopeSelector photography illustrations">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="" />
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>
                                                    Lorem ipsum dolor sit
                                                    amet, consetetur
                                                    sadipscing elitr, sed
                                                    diam nonumy eirmod
                                                    tempor invidunt ut
                                                    labore et dolore...
                                                </p>
                                                <p>
                                                    <a title="Project Image" class="fancybox-pop fancybox.image"
                                                        href="http://placehold.it/625x450"><i
                                                            class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i
                                                            class="fa fa-link fa-border fa-2x"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-4 isotopeSelector art">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="" />
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>
                                                    Lorem ipsum dolor sit
                                                    amet, consetetur
                                                    sadipscing elitr, sed
                                                    diam nonumy eirmod
                                                    tempor invidunt ut
                                                    labore et dolore...
                                                </p>
                                                <p>
                                                    <a title="Project Image" class="fancybox-pop fancybox.image"
                                                        href="http://placehold.it/625x450"><i
                                                            class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i
                                                            class="fa fa-link fa-border fa-2x"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-4 isotopeSelector photography">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="" />
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>
                                                    Lorem ipsum dolor sit
                                                    amet, consetetur
                                                    sadipscing elitr, sed
                                                    diam nonumy eirmod
                                                    tempor invidunt ut
                                                    labore et dolore...
                                                </p>
                                                <p>
                                                    <a title="Project Image" class="fancybox-pop fancybox.image"
                                                        href="http://placehold.it/625x450"><i
                                                            class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i
                                                            class="fa fa-link fa-border fa-2x"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-4 isotopeSelector photography websites">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="" />
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>
                                                    Lorem ipsum dolor sit
                                                    amet, consetetur
                                                    sadipscing elitr, sed
                                                    diam nonumy eirmod
                                                    tempor invidunt ut
                                                    labore et dolore...
                                                </p>
                                                <p>
                                                    <a title="Project Image" class="fancybox-pop fancybox.image"
                                                        href="http://placehold.it/625x450"><i
                                                            class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i
                                                            class="fa fa-link fa-border fa-2x"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="col-md-4 isotopeSelector photography art">
                        <article class="">
                            <figure>
                                <img src="http://placehold.it/625x450" alt="" />
                                <div class="overlay-background">
                                    <div class="inner"></div>
                                </div>
                                <div class="overlay">
                                    <div class="inner-overlay">
                                        <div class="row margin-0 project-content">
                                            <div class="col-md-12 info-head">
                                                <h3>Project Title</h3>
                                                <h4>Category</h4>
                                            </div>
                                            <div class="col-md-12 info">
                                                <p>
                                                    Lorem ipsum dolor sit
                                                    amet, consetetur
                                                    sadipscing elitr, sed
                                                    diam nonumy eirmod
                                                    tempor invidunt ut
                                                    labore et dolore...
                                                </p>
                                                <p>
                                                    <a title="Project Image" class="fancybox-pop fancybox.image"
                                                        href="http://placehold.it/625x450"><i
                                                            class="fa fa-search fa-border fa-2x"></i></a>
                                                    <a title="Project Link" href="portfolio-item.html"><i
                                                            class="fa fa-link fa-border fa-2x"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Columns Portfolio -->

        <div class="text-center">
            <button type="button" class="btn btn-primary">
                VIEW MORE PROJECTS <i class="fa fa-arrow-right"></i>
            </button>
        </div>
    </section>

    <!-- BLOG/LATEST NEWS-->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-section">
                        <span class="title-regular">LATEST</span><br />NEWS
                    </h2>
                    <hr class="title-underline" />
                </div>
            </div>
            <div class="row blog-listing">
                <div class="col-md-4">
                    <article>
                        <img class="img-thumbnail" src="http://placehold.it/690x527" alt="" />
                        <h2>Article 1</h2>
                        <hr class="title-underline" />
                        <p>
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam
                            erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita
                            kasd gubergren, no sea takimata sanctus est
                            Lorem ipsum dolor sit amet...
                        </p>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> Aug 17, 2016
                                - 6:53</span>
                            <span><i class="fa fa-user"></i> By
                                <a href="#">John Doe</a>
                            </span>
                            <span><i class="fa fa-tag"></i>
                                <a href="#">Duis</a>,
                                <a href="#">News</a>
                            </span>
                            <span><i class="fa fa-comments"></i>
                                <a href="#">12 Comments</a></span>
                        </div>
                        <a href="blog-single-post.html" class="btn btn-xs btn-primary">Read more...</a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <img class="img-thumbnail" src="http://placehold.it/690x527" alt="" />
                        <h2>Article 2</h2>
                        <hr class="title-underline" />
                        <p>
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam
                            erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita
                            kasd gubergren, no sea takimata sanctus est
                            Lorem ipsum dolor sit amet...
                        </p>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> Aug 17, 2016
                                - 6:53</span>
                            <span><i class="fa fa-user"></i> By
                                <a href="#">John Doe</a>
                            </span>
                            <span><i class="fa fa-tag"></i>
                                <a href="#">Duis</a>,
                                <a href="#">News</a>
                            </span>
                            <span><i class="fa fa-comments"></i>
                                <a href="#">12 Comments</a></span>
                        </div>
                        <a href="blog-single-post.html" class="btn btn-xs btn-primary">Read more...</a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <img class="img-thumbnail" src="http://placehold.it/690x527" alt="" />
                        <h2>Article 3</h2>
                        <hr class="title-underline" />
                        <p>
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam
                            erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita
                            kasd gubergren, no sea takimata sanctus est
                            Lorem ipsum dolor sit amet...
                        </p>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> Aug 17, 2016
                                - 6:53</span>
                            <span><i class="fa fa-user"></i> By
                                <a href="#">John Doe</a>
                            </span>
                            <span><i class="fa fa-tag"></i>
                                <a href="#">Duis</a>,
                                <a href="#">News</a>
                            </span>
                            <span><i class="fa fa-comments"></i>
                                <a href="#">12 Comments</a></span>
                        </div>
                        <a href="blog-single-post.html" class="btn btn-xs btn-primary">Read more...</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="page-section-no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 contact-container">
                                <h2 class="title-section">
                                    <span class="title-regular">CONTACT</span><br />US
                                </h2>
                                <hr class="title-underline" />
                                <p>
                                    Maecenas luctus nisi in sem fermentum
                                    blat. In nec elit solliudin, elementum,
                                    dictum pur quam volutpat suscipit
                                    antena.
                                </p>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usr" placeholder="NAME" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="EMAIL" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" id="message"
                                        placeholder="MESSAGE"></textarea>
                                </div>
                                <button type="button" class="btn btn-default">
                                    SEND <i class="fa fa-envelope"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6 padding-0">
                    <div id="map" class="img-responsive map-style"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER 1 -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <a href="index.html">
                            <img class="footer-logo" src="img/logo-footer.png" alt="logo" />
                        </a>
                    </div>
                    <div>
                        <address class="margin-bottom-30">
                            <p>
                                Samplestreet 3<br />
                                34117 Kassel<br />
                                Germany
                            </p>
                        </address>
                    </div>
                    <div class="margin-bottom-30">
                        <p>
                            <i class="fa fa-phone"></i> +49 561 00 00 00 00
                            <br />
                            <i class="fa fa-fax"></i> +49 561 00 00 00 00
                        </p>
                    </div>
                    <div>
                        <a href="https://lautenschlager.de">www.lautenschlager.de</a>
                        <br />
                        <a href="mailto:info@lautenschlager.de">info@lautenschlager.de</a>
                    </div>
                </div>
                <div class="col-md-3 footer-menu">
                    <h4>About Us</h4>
                    <p>
                        Nam liber tempor cum soluta nobis eleifend option
                        congue nihil imperdiet doming id quod mazim placerat
                        facer possim assum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat.
                    </p>
                    <a href="about-us.html">
                        <button class="btn btn-primary">Read More</button>
                    </a>
                </div>
                <div class="col-md-3 footer-blog">
                    <h4>RECENT BLOG POSTS</h4>
                    <ul>
                        <li>
                            <a href="#">Blog Entry 1<br /></a>
                            <a href="#">February 10 / John Doe </a>
                        </li>
                        <li>
                            <a href="#">Blog Entry 2<br /></a>
                            <a href="#">March 14 / Jane Doe </a>
                        </li>
                        <li>
                            <a href="#">Blog Entry 3<br /></a>
                            <a href="#">April 06 / Jenny Doe </a>
                        </li>
                        <li>
                            <a href="#">Blog Entry 4<br /></a>
                            <a href="#">June 25 / James Doe </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 footer-menu">
                    <h4>NAVIGATE</h4>
                    <ul>
                        <a href="index.html">
                            <li>Home</li>
                        </a>
                        <a href="about-me.html">
                            <li>About Me</li>
                        </a>
                        <a href="about-us.html">
                            <li>About Us</li>
                        </a>
                        <a href="our-team.html">
                            <li>Our Team</li>
                        </a>
                        <a href="blog-right-sidebar.html">
                            <li>Blog</li>
                        </a>
                        <a href="contact.html">
                            <li>Contact</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Loads Bootstrap Main JS -->
    <script src="{{ asset('Frontend/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{-- <script src="{{ asset('Frontend/bootstrap/js/ie10-viewport-bug-workaround.js') }}"></script> --}}

    <!-- Initiate Google Maps - For more Infos look into the documentation -->
    <script src="{{ asset('Frontend/js/google-map.js') }}"></script>

    <!-- Initiate Portoflio Script -->
    <script src="{{ asset('Frontend/extensions/portfolio/isotope.min.js') }}"></script>
    <script src="{{ asset('Frontend/extensions/portfolio/portfolio.js') }}"></script>

    <!-- Initiate Fancybox/Lightbox Script -->
    <!-- Fancybox/Lightbox -->
    <script type="text/javascript" src="{{ asset('Frontend/extensions/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Frontend/extensions/fancybox/jquery.fancybox.pack.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/extensions/fancybox/jquery.fancybox.css') }}"
        media="screen" />
    <script type="text/javascript" src="{{ asset('Frontend/extensions/fancybox/jquery.fancybox-media.js') }}"></script>
    <!-- Initiate Fancybox/Lightbox for Videos -->
    <script type="text/javascript">
        $(document).ready(function () {
          /*
           *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
           */
          $(".fancybox-media")
              .attr("rel", "media-gallery")
              .fancybox({
                  openEffect: "none",
                  closeEffect: "none",
                  prevEffect: "none",
                  nextEffect: "none",
                  arrows: false,
                  helpers: {
                      media: {},
                      buttons: {},
                  },
              });
      });
    </script>
</body>

</html>