<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Travel offer</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="./addoffers.js"></script>
 
        <style>
            .err {
                color: red; 

            }
        </style>
    </head>
    <body id="page-top">

 
        <section class="page-section" id="contact">
            <div class="container-sm">
   
    
    <h1 class="text-center ">Add a Travel Offer </h1> 
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>


    <form  id="addTravelOfferForm" action="showtraveloffer.php" method="post">
        <label class="  text-center " for="title  ">Title</label><br>
        <input class="form-control" type="text" id="title" name="title">
        <div   id="titleER" class="err"></div>
     <br>

        <label for="destination">Destination:</label><br>
        <input class="form-control" type="text" id="destination" name="destination">
        <div id="destER" class="err"></div>

   <br>

        <label for="departure_date">Departure Date:</label><br>
        <input class="form-control" type="date" id="departure_date" name="departure_date" >
        <div id="dpdateER" class="err"></div>

     <br>

        <label for="return_date">Return Date:</label><br>
        <input class="form-control" type="date" id="return_date" name="return_date" >
        <div id="rtdateER" class="err"></div>

        <br>

        <label for="price">Price :</label><br>
        <input class="form-control" type="number" id="price" name="price" >
        <div id="prixER" class="err"></div>

<br>

        <label for="Disponibility">Disponibility:</label><br>
        <input  class="form-check-input" type="checkbox" id="Disponibility" name="Disponibility" >
        <br>

        <label class="form-check-label" for="category">Category:</label><br>
        <select class="form-control " id="category" name="category" title="Select the category of the travel offer.">
            <option value="adventure">Adventure</option>
            <option value="relaxation">Relaxation</option>
            <option value="culture">Culture</option>
            
        </select>
   <br>

        <button class="btn btn-dark "type="submit">Add Offer</button>
    </form>
    </div>
        </section>
</body>
</html>


