<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ejercicios PHP</title>
    <meta name="description" content="Ejercicios PHP">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img/favicon.jpg">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="text-gray-700">

    <? include 'components/loader.php' ?>

    <? include 'components/header.php' ?>

    <!-- =========={ MAIN }==========  -->
    <main id="content">

    <div>
      <? include 'functions/db-connection.php' ?>
    </div>

      <? include 'components/hero.php' ?>

      <? include 'components/exercises.php' ?>

      <? include 'components/concepts.php' ?>

      <? include 'components/resources.php' ?>

      <? include 'components/community.php' ?>

      <? include 'components/contact.php' ?>

    </main><!-- end main -->

    <? include 'components/footer.php' ?>

    <? include 'components/scroller.php' ?>

    <!--Vendor js-->
    <script src="vendors/glightbox/dist/js/glightbox.min.js"></script>
    <script src="vendors/@splidejs/splide/dist/js/splide.min.js"></script>
    <script src="vendors/typed.js/lib/typed.min.js"></script>
    <script src="vendors/wow.js/dist/wow.min.js"></script>
    <script src="vendors/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Start development js -->
    <script src="js/theme.js"></script>
    <!-- End development js -->
  </body>

</html>