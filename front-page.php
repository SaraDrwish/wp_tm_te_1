
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page php - ThemeBySara</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/> -->

    <!-- <link rel="stylesheet" href="path/to/file/style.css"> -->

    <?php    
      wp_head();
    ?>


</head>
<body>

<header class=" mb-2">  
    <h3 class="py-1 bg-danger   " >
    <i class="fas fa-sun"></i>
         Sara
    </h3>
    <nav class="d-flex justify-content-center p-1" >
        <ul class="d-flex justify-content-around p-1 " >
            <a href="/" class="  p-2" ><li  class="d-flex  " > home </li> </a>
            <a href="#"  class="  p-2" ><li> about </li> </a>
            <a href="#"  class="d-flex p-2" ><li> contact </li> </a>
 
        </ul>
    </nav>
</header>

<main class="bg-warning py-1 " >
    <i class="fas fa-circle"></i>
    <p>Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Deserunt quas
         neque necessitatibus.
         Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Deserunt quas
         neque necessitatibus.rem ipsum dolor sit amet consectetur 
        adipisicing elit. Deserunt quas
         neque necessitatibus. <br>
         <i class="fas fa-coffee"></i>
    </p>

</main>

<section class=" py-2" >
    <h2>Front Page php - ThemeBySara 1 - 1 </h2>

    <div class="alert alert-primary" role="alert">
       imple primary alert—check 
    </div>
     

    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Link with href
        </a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Button with data-target
        </button>
    </p>
     
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
        This panel is hidden by default but revealed when the user activates the relevant trigger.
    </div>
    </div>


  <div class="mainBox  d-flex justify-content-around my-4 ">
    <div class="card" style="width: 18rem;">
        <img src="assets/img/11.jpg" class="card-img-top" alt="11">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">  build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Go somewhere</a>
        </div>
        </div>
        <div class="card" style="width: 18rem;">
        <img src="../assets/img/coffee.jpg" class="card-img-top" alt=".coffee.">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">  quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Go somewheress</a>
        </div>
        </div>

   </div>

</section>


<footer class=" bg-success py-2 " >   Sara @2024   </footer>
    
<?php wp_footer(); ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
<!-- <script src="./assets/js/app.js"></script> -->
</body>
</html>