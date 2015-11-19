<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
</head>

<body>

    <?php include 'body-start.php';?>

    <!-- Start Bootstrap container -->
    <div class="container">
        <!--Start Header-->
			<?php include 'header.php';?>
        <!--End Header-->
        <!--Start Navbar-->
            <?php include 'navbar.php';?>
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
            <a class="btn btn-lg btn-primary" href="http://masterworks-concert-chorale.ticketleap.com/vivaldis-gloria-and-christmas-treasures/" target="_blank" role="button">Tickets and Directions &raquo;</a>
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

        <!--Start Footer-->
        <?php include 'footer.php';?>
        <!--End Footer-->
    </div> <!--End  <div class="container"-->

    <?php include 'social-buttons.php';?>

</body>
</html>