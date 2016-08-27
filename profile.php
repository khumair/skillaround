<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Responsive Portfolio Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website Landing Page for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Global CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="bootstrap/fonts/font-awesome.css"> -->
    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css">
    <!-- github acitivity css -->
    <link rel="stylesheet" href="plugins/github-activity/src/github-activity.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="css/profile.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- ******HEADER****** -->
    <header class="header">
      <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">

        <img src="img/logo.png" alt="" class="img-responsive" height="175px" width="185px" />
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- <li class="active"><a href="#">Opportunity <span class="sr-only">(current)</span></a></li> -->
          <li class="nav navbar-nav"> <a href="opportunity.php">Opportunity</a></li>
          <li class="nav navbar-nav"> <a href="#">Boost</a></li>
          <li class="nav navbar-nav"> <a href="#">Help</a></li>
          </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><img src="img/profile.png"  class="img-circle special-img" height="65px" width="65px"></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Logout</a></li>

            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

        <div class="container">
            <img class="profile-image img-responsive pull-left" src="img/profile.png" alt="James Lee" />
            <div class="profile-content pull-left">
                <h1 class="name">James Lee</h1>
                <h2 class="desc">Web App Developer</h2>
                <ul class="social list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-github-alt"></i></a></li>
                    <li class="last-item"><a href="#"><i class="fa fa-hacker-news"></i></a></li>
                </ul>
            </div><!--//profile-->

        </div><!--//container-->
    </header><!--//header-->

    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p>
                              fetch description from Data base
                              </p>
                        </div><!--//con   tent-->
                    </div><!--//section-inner-->
                </section><!--//section-->

               <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Skills</h2>
                        <div class="content">

                            <div class="item featured text-center">
                                <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/" target="_blank">KickStarter - Velocity</a></h3>
                                <p class="summary">A responsive Bootstrap template designed for digital products</p>

                                <div class="desc text-left">
                                    <p>You can promote your main project here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                                </div><!--//desc-->
                          </div><!--//item-->


                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="projects section">
                    <div class="section-inner">
                        <h2 class="heading">My Projects</h2>
                        <div class="content">

                            <div class="item">
                                <h3 class="title"><a href="#">Project Name</a> <span class="label label-theme">Open Source</span></h3>
                                <p class="summary">Project Description</p>
                                <p><a class="more-link" href="Project Link" target="_blank"><i class="fa fa-external-link"></i> Source Link Name</a></p>
                            </div><!--//item-->

                            <a class="btn btn-cta-secondary" href="#"> Add More Project <i class="fa fa-plus"></i></a>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Co-Founder & Lead Developer - <span class="place"><a href="#">Startup Hub</a></span> <span class="year">(2014 - Present)</span></h3>
                                <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Software Engineer - <span class="place"><a href="#">Google</a></span> <span class="year">(2013 - 2014)</span></h3>
                                <p>Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="title">Software Engineer - <span class="place"><a href="#">eBay</a></span> <span class="year">(2012 - 2013)</span></h3>
                                <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                            </div><!--//item-->

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->
                <section class="languages section">
                    <div class="section-inner">
                      <h2 class="heading">Languages</h2>
                      <div class="content">
                          <ul class="list-unstyled">
                                                        <li class="item">
                                  <span class="title"><strong>English:</strong></span>
                                  <span class="level">Native Speaker <br class="visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                              </li><!--//item-->
                              <li class="item">
                                  <span class="title"><strong>Spanish:</strong></span>
                                  <span class="level">Professional Proficiency <br class="visible-sm visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></span>
                              </li><!--//item-->
                          </ul>
                            <a class="btn btn-cta-secondary" href="#"> Add Language <i class="fa fa-plus"></i></a>
                      </div><!--//content-->

                    </div><!--//secton-inner-->
                </section><!--//section-->
                <section class="education section">
                    <div class="section-inner">
                        <h2 class="heading">Education</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> MSc Psychology and Computer Science</h3>
                                <h4 class="university">University College London <span class="year">(2011-2012)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> BSc Computer Science</h3>
                                <h4 class="university">University of Bristol <span class="year">(2008-2011)</span></h4>
                            </div><!--//item-->
                            <a class="btn btn-cta-secondary" href="#"> Add Eduation <i class="fa fa-plus"></i></a>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>San Francisco, US</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">user@website.com</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://www.website.com</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//aside-->

                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            <p class="intro">
                                Intro about your skills goes here. Keep the list lean and only show your primary skillset. You can always provide a link to your Linkedin or Coderwall profile so people can get more info there.</p>

                            <div class="skillset">

                                <div class="item">
                                    <h3 class="level-title">Python &amp; Django<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to add more info...">Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Javascript &amp; jQuery<span class="level-label">Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">HTML5, CSS3, SASS &amp; LESS<span class="level-label">Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Ruby on Rails<span class="level-label">Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="85%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Coderwall</a></p>
                            </div>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="credits aside section">
                    <div class="section-inner">
                        <h2 class="heading">Companies Looking you</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><a href="#" target="_blank"><i class="fa fa-external-link"></i> Comppany Name 1</a></li>
                                <p>

                                </p>
                                <a class="btn btn-cta-secondary btn-follow" href="h#" target="_blank"><i class="fa fa-star"></i> Apply </a>
                                <a class="btn btn-cta-primary btn-download" href="#" target="_blank"><i class="fa fa-share"></i> Share</a>
                                <li><a href="#" target="_blank"><i class="fa fa-external-link"></i> Comppany 1</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-external-link"></i> Comppany 1</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-external-link"></i> Comppany 1</a></li>

                                <li><a href="#" target="_blank"><i class="fa fa-external-link"></i> Comppany 1</a></li>

                                <li><a href="#" target="_blank"><i class="fa fa-external-link"></i> Comppany 1</a></li>

                                <li>Profile image: <a href="#" target="_blank">Comppany 1</a></li>
                                <li>iPad and iPhone mocks: <a href="#" target="_blank">Comppany 1</a></li>

                            </ul>

                            <hr/>


                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

            </div><!--//secondary-->
        </div><!--//row-->
    </div><!--//masonry-->

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-rss/dist/jquery.rss.min.js"></script>
    <!-- github calendar plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
    <script type="text/javascript" src="plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="plugins/github-activity/src/github-activity.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
