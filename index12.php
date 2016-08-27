<?php include'include/head.php' ?>

<body data-spy="scroll" data-target="#main-navbar">
    <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    <div class="body">
      <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">

        <!--========== BEGIN HEADER ==========-->
        <?php include 'include/header.php'; ?>
        <!-- ========= END HEADER =========-->
    <section id="home" class=" bg-style1">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                <img src="img/mainSlider.png" alt="" class="img-responsive" style="margin-top:350px; margin-left:auto; margin-right:auto; display:block;width:90%">
                   <div class="carousel-caption" >
                        <h1 style="color:black">We connect skilled individuals<br> to speaking opportunities around Europe</h1>
                        <div class="extra-space-l"></div>
                        <a class="btn btn-blank" href="company.php" role="button" >Eventseekers</a>
                        <a class="btn btn-blank" href="opportunity.php" role="button">Organisations</a>
                   </div>
                </div>
            </div>
        </div>
    </section>

      <!--  ********** Begining Block 2 ********** -->


      <script src="inc/jquery/jquery-1.11.1.min.js"></script>
      <script src="inc/bootstrap/js/bootstrap.min.js"></script>
      <script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
      <script src="inc/stellar/js/jquery.stellar.min.js"></script>
      <script src="inc/animations/js/wow.min.js"></script>
      <script src="inc/waypoints.min.js"></script>
      <script src="inc/isotope.pkgd.min.js"></script>
      <script src="inc/classie.js"></script>
      <script src="inc/jquery.easing.min.js"></script>
      <script src="inc/jquery.counterup.min.js"></script>
      <script src="inc/smoothscroll.js"></script>

      <!-- Theme JS -->
      <script src="js/theme.js"></script>

</body>
</html>
