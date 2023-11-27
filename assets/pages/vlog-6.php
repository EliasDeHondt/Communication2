<!DOCTYPE html>
<!--Van Elias De Hondt-->
<html lang="nl">
    <head>
        <!--Meta + Title-->
        <meta charset="utf-8">
        <title>BierBrigade - Vlog 6</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta property="og:title" content="BierBrigade - Vlog 6" />
        <meta property="og:image" content="https://eliasdh.com/assets/media/images/logo-hd.png"/>
        <meta content="BierBrigade - Vlog 6" name="description">
        <!--Meta + Title-->
        <!--Favicon-->
        <link href="/assets/media/images/Bier_Brigade_Logo.png" rel="icon">
        <!--Favicon-->
        <!--Google Web Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <!--Google Web Fonts-->
        <!--Font Awesome-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!--Font Awesome-->
        <!--Libraries Stylesheet-->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <!--Libraries Stylesheet-->
        <!--Custom CSS-->
        <link rel="stylesheet" href="/assets/css/style.css">
        <!--Custom CSS-->
    </head>
    <body class="selectioncoler" data-spy="scroll" data-target=".navbar" data-offset="51">
        <!--Top Navbar Blog-->
        <div id="top-navbar-blog"></div>
        <!--Top Navbar Blog-->
        <!--Vlog-->
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <h1>Vlog 6 - Talking about databases</h1>
            <!--YouTube-video-->
            <div class="youtube-video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/B-_edLbeMWk" frameborder="0" allowfullscreen></iframe>
            </div>
            <!--YouTube-video-->
            <!--Comments Section-->
            <div class="comments-section">
                <h3>Opmerkingen</h3>
                <form method="post">
                    <textarea id="comment" name="comment" rows="4" cols="50" placeholder="Plaats hier je opmerking"></textarea>
                    <button type="submit" id="submit-comment">Plaats opmerking</button>
                </form>
                <div id="comments-list"></div>
            </div>
            <!--Comments Section-->
        </div>
        <!--Vlog-->
        <!--Bottom-->
        <div id="bottom"></div>
        <!--Bottom-->
        <!--Back to Top-->
        <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>
        <!--Back to Top-->
        <!--JavaScript-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="/lib/typed/typed.min.js"></script>
        <script src="/lib/easing/easing.min.js"></script>
        <script src="/lib/waypoints/waypoints.min.js"></script>
        <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="/lib/lightbox/js/lightbox.min.js"></script>
        <script src="/assets/js/main.js"></script>
        <script src="/assets/js/script-1.js"></script>
        <script src="/assets/js/get-comments.js"></script>
        <script>
            loadHTML("top-navbar-blog", "/assets/includes/top-navbar-blog.html");
            loadHTML("bottom", "/assets/includes/bottom.html");
        </script>
        <!--JavaScript-->
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["comment"])) {
    $commentText = $_POST["comment"];
    $data = "$commentText\n";
    file_put_contents("../../data/comments-vlogs.txt", $data, FILE_APPEND);
}
?>