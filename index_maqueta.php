<!DOCTYPE html>
<html lang="en">
  <?php include 'view/layout/head.php'; ?>
  <body>
    <!--MENÚ-->
    <?php include 'view/layout/menu.php';?>
    
    <?php include 'view/layout/banner.php'; ?>
    

    <!--MODALES-->
    <!-- Modal -->
    <?php include 'view/alumno/login.php' ;?>

    <?php include 'view/alumno/register.php' ;?>
    
    <?php include 'view/alumno/error-register.php' ;?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script
        src="assets/js/validate-register.js" type="text/javascript"
    ></script>
    
  </body>
</html>
