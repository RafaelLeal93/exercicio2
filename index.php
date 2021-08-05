<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <title>Exercicio 2</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="assets/styles.css" rel="stylesheet">
  </head>

  <body>

    <nav class="site-header py-1 float-right m-1 mb-4 ">

      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class=" border-bottom border-danger" href="#">All Products</a>
        <a class=" border-bottom border-secondary" href="#">Suspension</a>
        <a class=" border-bottom border-info" href="#">Floor</a>
        <a class=" border-bottom border-light" href="#">Table</a>
        <a class=" border-bottom border-success" href="#">Wall</a>
        <a class=" border-bottom border-dark" href="#">Graphic</a>
        <a class=" border-bottom border-info" href="#">Furniture</a>
        <img src="assets/images/loupe.svg" alt="" class="img-svg border-bottom border-dark">

        <form class=""> 
        <input class=" search border-bottom border-dark" type="search" placeholder="Search" aria-label="Search">
        </form>

      </div>

    </nav>




    <div class="row no-gutters w-100 h-100 bg-light ">

          <div class="col-md no-gutters w-100">

            <img src="assets/images/main-image.jpg" alt="" class="img-fluid w-100">
          
          </div>
          
          <div class="col-md no-gutters overlay d-flex justify-content-center my-auto ">

            <form>
              <div class="form-group w-100 ">

                <h1 class="">BOOK A VIRTUAL MEETING</h1>
                <div class="redborder">
                </div>
                <div class="d-md-flex  grayborder">
                  <img src="assets/images/user.svg" alt="" class="img-svg">

                  <input type="name" class="form-control" id="" aria-describedby="nameHelp" placeholder=" Enter your Name">
                </div>
                
                <div class="d-md-flex  grayborder">
                  <img src="assets/images/email.svg" alt="" class="img-svg">

                  <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="d-md-flex  w-50 grayborder">
                
                  <img src="assets/images/placeholder.svg" alt="" class="img-svg">

                  <select class="form-control  ">

                      <option>Choose your Country</option>
                      
                  </select>
              
                </div>

                <div class="d-md-flex">
                  <img src="assets/images/briefcase.svg" alt="" class="img-svg grayborder">
                  <div class=" grayborder w-100">

                    <select class="form-control  ">
                      <option>Choose your Occupation</option>
                    </select>

                  </div>

                  <div class="d-md-flex grayborder ml-3 w-100">
                    <img src="assets/images/buildings.svg" alt="" class="img-svg ">
                    <input type="company" class="form-control " id="" aria-describedby="companyHelp" placeholder="Enter your Company">

                  </div>
                </div>

                <button type="button" class="btn mt-3 float-right">send now</button>
            
              </div>
            </form>
      

          </div>
   
    </div>

    <div class="d-md-flex flex-md-equal w-100 mt-1">
      <div class="mr-1 ">
        <div class="overlay">
          <img src="assets/images/products-cat/1-suspension.jpg" alt="" class="img-fluid w-100">
            <div  class="centered-bottom pl-4 red">
              <p>BOTTI SUSPENSION</p>
            </div>
        </div>
      </div>
      <div class="mr-1 ">
          <div class="overlay">
            <img src="assets/images/products-cat/2-wall.jpg" alt="" class="img-fluid w-100">
            <div  class="centered-bottom pl-4 orange">
             <p>TURNER WALL</p>
            </div>
          </div>
      </div>
      <div class="mr-1">
          <div class="overlay">
            <img src="assets/images/products-cat/3-floor.jpg" alt="" class="img-fluid w-100">
            <div  class="centered-bottom pl-4 blue">
             <p>BRUBECK FLOOR</p>
            </div>
          </div>
      </div>
      <div class="mr-1">
        <div class="overlay">
          <img src="assets/images/products-cat/4-table.jpg" alt="" class="img-fluid w-100">
          <div class="centered-bottom pl-4 green">
            <p>AMY TABLE</p>
          </div>
        </div>
      </div>
      <div class="">
        <div class="overlay ">
          <img src="assets/images/products-cat/5-pendant.jpg" alt="" class="img-fluid w-100">
            <div  class="centered-bottom pl-4 mb-3 red ">
              <p>CARTER PENDANT</p>
            </div>

        </div>
      </div>
      
    </div>


  </body>
</html>
