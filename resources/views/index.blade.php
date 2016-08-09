<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ColorMag</title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- for fontawesome icon css file -->
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- for content animate css file -->
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}"> 
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <!-- main site css file -->
    <link href="{{URL::asset('structure.css')}}" rel="stylesheet">

 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <!-- Preloader -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- End Preloader -->

    
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- ==================start header=============== -->
    <header id="header">
      <div class="container">
         <!-- Static navbar -->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><span>Color</span> Mag</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav custom_nav">
              <li class=""><a href="#">Home</a></li>              
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jobs</a>
                <ul class="dropdown-menu" role="menu">
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Jobs Home</a>
                     <!--  <ul class="dropdown-menu" role="menu">
                        <li>Two Columns</li>
                        <li>Three Columns</li>
                        <li>Four Columns</li>
                      </ul>   -->
                  </li>
                  <li><a href="#">Faq</a></li>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Article</a></li>
                
                </ul>
              </li>            
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Standard Blog Layout</a></li>
                  <li><a href="#">Post With Comments</a></li>
                  <li><a href="#">Page:Right Sidebar</a></li>                
                </ul>
              </li>
              <li><a href="#">Shortcodes</a></li>
              <li><a href="#">Archive</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Download Template</a></li>
            </ul>           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <form id="searchForm">
        <input type="text" placeholder="Search...">
        <input type="submit" value="">
      </form>
      </div>
    </header>    
    <!-- ==================End header=============== -->

    <!-- ==================start content body section=============== -->
    <section id="contentbody">
      <div class="container">
        <div class="row">
        <!-- start left bar content -->
          <div class=" col-sm-12 col-md-6 col-lg-6">
            <div class="row">
              <div class="leftbar_content">
                <h2>The New Stuff</h2>
                <!-- start single stuff post -->
                <div class="single_stuff wow fadeInDown">
                  <div class="single_stuff_img">
                    <a href="single_page.html"><img src="img/stuff_img1.jpg" alt="img"></a>
                  </div>
                  <div class="single_stuff_article">
                      <div class="single_sarticle_inner">
                          <a class="stuff_category" href="#">Technology</a>
                        <div class="stuff_article_inner">
                          <span class="stuff_date">Nov <strong>17</strong></span>
                          <h2><a href="single_page.html">Duis quis erat non nunc fringilla</a></h2>
                          <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula...</p>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- End single stuff post -->

                 <!-- start single stuff post -->
                <div class="single_stuff wow fadeInDown">
                  <div class="single_stuff_img">
                    <a href="#"><img src="img/stuff_img1.jpg" alt="img"></a>
                  </div>
                  <div class="single_stuff_article">
                      <div class="single_sarticle_inner">
                          <a class="stuff_category" href="#">Technology</a>
                        <div class="stuff_article_inner">
                          <span class="stuff_date">Nov <strong>17</strong></span>
                          <h2><a href="#">Duis quis erat non nunc fringilla</a></h2>
                          <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula...</p>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- End single stuff post -->

                <!-- start single stuff post -->
                <div class="single_stuff wow fadeInDown">
                  <div class="single_stuff_img">
                    <a href="#"><img src="img/stuff_img1.jpg" alt="img"></a>
                  </div>
                  <div class="single_stuff_article">
                      <div class="single_sarticle_inner">
                          <a class="stuff_category" href="#">Technology</a>
                        <div class="stuff_article_inner">
                          <span class="stuff_date">Nov <strong>17</strong></span>
                          <h2><a href="#">Duis quis erat non nunc fringilla</a></h2>
                          <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula...</p>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- End single stuff post -->

                <!-- start single stuff post -->
                <div class="single_stuff wow fadeInDown">
                  <div class="single_stuff_img">
                    <a href="#"><img src="img/stuff_img1.jpg" alt="img"></a>
                  </div>
                  <div class="single_stuff_article">
                      <div class="single_sarticle_inner">
                          <a class="stuff_category" href="#">Technology</a>
                        <div class="stuff_article_inner">
                          <span class="stuff_date">Nov <strong>17</strong></span>
                          <h2><a href="#">Duis quis erat non nunc fringilla</a></h2>
                          <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula...</p>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- End single stuff post -->

                <!-- start single stuff post -->
                <div class="single_stuff wow fadeInDown">
                  <div class="single_stuff_img">
                    <a href="#"><img src="img/stuff_img1.jpg" alt="img"></a>
                  </div>
                  <div class="single_stuff_article">
                      <div class="single_sarticle_inner">
                          <a class="stuff_category" href="#">Technology</a>
                        <div class="stuff_article_inner">
                          <span class="stuff_date">Nov <strong>17</strong></span>
                          <h2><a href="#">Duis quis erat non nunc fringilla</a></h2>
                          <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula...</p>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- End single stuff post -->

                <div class="stuffpost_paginatinonarea wow slideInLeft">
                  <ul class="newstuff_pagnav">
                    <li><a class="active_page" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                </div>
              </div>
            </div>  
          </div>
          <!-- End left bar content -->

                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer_inner">
              <p class="pull-left">All Rights Reserved <a href="#">ColorMag</a></p>
              <p class="pull-right">Developed By <a href="http://www.wpfreeware.com" rel="nofollow">WpFreeware</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ==================End content body section=============== -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script> 
    <!-- For content animatin  -->
    <script src="{{URL::asset('js/wow.min.js')}}"></script> 
    <!-- custom js file include -->
     <script src="{{URL::asset('js/custom.js')}}"></script>     
        
  </body>
</html>