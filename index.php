<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Masterworks Concert Chorale">
    <meta charset="utf-8">
    <title>Masterworks Concert Chorale</title>

    <!--Required for responsiveness-->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>

    <!--Font Awesome (for icons)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--Using Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Using jQuery, required for Bootstrap-->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!--Style for snow background-->
    <link rel="stylesheet" href="css/snowstyle.css">

    <link rel="stylesheet" href="css/custom.css">

    <!--Favicon-->
    <link rel="icon" href="icon16.png" type="image/png">

</head>

<body>

    <!--Canvas and script for background snowflakes-->
    <canvas id="canvas"></canvas>
    <script src="js/snowscript.js"></script>

    <!-- Facebook root div and script for like/share buttons-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- End Facebook like/share root div and script-->

    <!-- Start Bootstrap container -->
    <div class="container">
        <!--Start Header-->
			<?php include 'header.php';?>
        <!--End Header-->
        <!--Start Navbar-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" >Masterworks Concert Chorale</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Concerts and Tickets</a></li>
                        <li class="nav-li-large"><a href="#">Join Us!</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">

                        <li class="nav-li-large"><a href="#"><i class="fa fa-envelope-square fa-lg" ></i>&nbsp;&nbsp;&nbsp;Contact Us</a></li>

                        <li title="Facebook"><a href="https://www.facebook.com/Masterworks-Concert-Chorale-152919821389553/" target="_blank"><i class="fa fa-facebook-official fa-lg" ></i>&nbsp;&nbsp;&nbsp;Facebook</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
        <!--End Navbar-->

        <!--Start Jumbotron-->
        <div class="jumbotron text-center pagination-centered">
            <img class="img-responsive img-rounded" src=images/gloria.jpg alt="Vivaldi's Gloria">
            <p></p>
            <p>Come enjoy a performance of Vivaldi's Gloria along with other wonderful Christmas treasures!</p>
            <p></p>
             <p>Saturday, November 21 at 7:30pm</p>
             <p>Beulah Presbyterian Church, Churchill, PA</p>
            <p>
            <a class="btn btn-lg btn-primary" href="" role="button">Tickets and Directions &raquo;</a>
            </p>
        </div>
        <!--End Jumbotron-->

        <!--Start Thumbnails, commented out for now
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/200x100" alt="Placeholder Image">
                    <div class="caption">
                        <h3>X-Mas Music Sample #1</h3>
                        <p>Awesome description of a music sample.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/200x100" alt="Placeholder Image">
                    <div class="caption">
                        <h3>Vivaldi Sample</h3>
                        <p>Awesome description of a music sample.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/200x100" alt="Placeholder Image">
                    <div class="caption">
                        <h3>X-Mas Music Sample #2</h3>
                        <p>Awesome description of a music sample.</p>
                    </div>
                </div>
            </div>
        </div>
        <End Thumbnails,commented out for now-->

        <div class="row adjust-vert">
            <div class="col-md-12">
                <div class="fb-like" data-href="http://www.mccsings.com" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                <!--Twitter links, commented out for now
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <a href="https://twitter.com/MCCSingsPittsburgh" class="twitter-follow-button" data-show-count="false" data-size="default" data-dnt="true">Follow @MCCSingsPittsburgh</a>

                &nbsp;

                <a class="twitter-share-button"
                  href="https://twitter.com/intent/tweet?text=Check%20out%20Masterworks%20Concert%20Chorale%20of%20Pittsburgh"
                    data-counturl="mccsings.com" data-count="none">
                Tweet</a>
                <End Twitter links-->
            </div> <!--End <div class="col-md-12"-->

        </div> <!--End <div class="row adjust-vert">-->

    </div> <!--End  <div class="container">

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--Twitter follow button JavaScript-->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</body>
</html>