        <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          <meta name="author" content="">
          <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
          <link href="bower_components/bootstrap-jasny/dist/css/bootstrap.css" rel="stylesheet">

                  <!-- Custom styles for this template -->

             <link href="stylesheets/signin.css" rel="stylesheet">
                    <link href="stylesheets/background.css" rel="stylesheet">

        <style>

        .checkbox{

            font-size: 110%;
        font-weight:bold;

        }

        .jumbotron{

            padding-top: 2%;
            padding-bottom: 2%;

        }
        .featurette-heading {

            text-align:center;
        }


        </style>

        </head>
        <body>


            <?php include "db.php"; ?>
                <!--signin-->

                    <br />
                    <div class = "container">
                        <div class="progress progress-striped active">
                            <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> <br />
                            <span class="sr-only">75% Complete</span>
                            </div>
                        </div>

                        <div class="jumbotron">
                            <h1>Choose Your Interests</h1>
                            <p class="lead">Nobody Is Perfect. If We Miss Some, Add Your Own In The Textbox Provided.</p>
                         </div>


                         <form class="form-signin" role="form" action="postsandwhich2.php" method="post" onSubmit='validate(); return false;'>
                Interests : <input type="text" name="interests" id="interests" class="form-control" placeholder="Interests" required autofocus> <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    </div>

<hr class="featurette-divider">

<h2 class="featurette-heading">OR SELECT MULTIPLE INTERESTS FROM THE LIST!</h2>

                   <div class = "container">

<form method = "post" action = "postsandwich.php">


          <div class="control-group" id = "adjust">
            <div class="controls span3 id ="adjust"">

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="accounting"> Accounting
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="airport"> Airport
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="amusement_park"> Amusement Park
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="aquarium"> Aquarium
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="art_gallery"> Art Gallery
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="atm"> ATM
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="bakery"> Bakery
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="bank"> Bank
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="bar"> Bar
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="beauty_salon"> Beauty Salon
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="bicycle_store"> Bicycle Store
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="book_store"> Book Store
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="bowling_alley"> Bowling Alley
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="bus_station"> Bus Station
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="cafe"> Cafe
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="campground"> Campground
                </label>

                 <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="car_dealer"> Car Dealer
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="car_rental"> Car Rental
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="car_repair"> Car Repair
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="car_wash"> Car Wash
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="casino"> Casino
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="cemetery"> Cemetery
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="church"> Church
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="city_hall"> City Hall
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="clothing_store"> Clothing Store
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="convenience_store"> Convenience Store
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="courthouse"> Courthouse
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="dentist"> Dentist
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="department_store"> Department Store
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="doctor"> Coctor
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="electrician"> Electrician
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="electronics_store"> Electronics Store
                </label>
        </div>





            <div class="controls span3">
        <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="embassy"> Embassy
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="establishment"> Establishment
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="finance"> Finance
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="fire_station"> Fire Station
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="florist"> Florist
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="food"> Food
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="funeral_home"> Funeral Home
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="furniture_store"> Furniture Store
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="gas_station"> Gas Station
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="general_contractor"> General Contractor
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="grocery_or_supermarket"> Grocery Or Supermarket
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="gym"> Gym
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="hair_care"> Hair Care
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="hardware_store"> Hardware Store
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="health"> Health
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="hindu_temple"> Hindu Temple
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="home_goods_store"> Home Goods Store
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="hospital"> Hospital
                </label>

                 <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="insurance_agency"> Insurance Agency
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="jewelry_store"> Jewelry Store
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="laundry"> Laundry
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="lawyer"> Lawyer
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="library"> Library
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="liquor_store"> Liquor_ Store
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="local_government_office"> Local Government Office
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="locksmith"> Locksmith
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="lodging"> Lodging
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="meal_delivery"> Meal Delivery
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="meal_takeaway"> Meal Takeaway
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="mosque"> Mosque
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="movie_rental"> Movie Rental
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="movie_theater"> Movie Theater
                </label>
                <label class="checkbox">
           </div>









            <div class="controls span2">
        <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="moving_company"> Moving Company
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="museum"> Museum
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="night_club"> Night Club
                </label>
                 <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="painter"> Painter
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="park"> Park
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="parking"> Parking
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="pet_store"> Pet Store
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="pharmacy"> Pharmacy
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="physiotherapist"> Physiotherapist
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="place_of_worship"> Place Of Worship
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="plumber"> Plumber
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="police"> Police
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="post_office"> Post Office
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="real_estate_agency"> Real Estate
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="restaurant"> Restaurant
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="roofing_contractor"> Roofing Contract
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="rv_park"> RV Park
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="school"> School
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="shoe_store"> Shoe Store
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="shopping_mall"> Shopping Mall
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="spa"> Spa
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="stadium"> Stadium
                </label>

                 <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="storage"> Storage
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="store"> Store
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="subway_station"> Subway Station
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="synagogue"> Synagogue
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="taxi_stand"> Taxi Stand
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="train_station"> Train Station
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="travel_agency"> Travel Agency
                </label>
                <label class="checkbox">
                   <input type="checkbox" name="passtime[]" value="university"> University
                </label>
                <label class="checkbox">
                    <input type="checkbox" name="passtime[]" value="veterinary_care"> Veterinary Care
                </label>

                <label class="checkbox">
                <input type="checkbox" name="passtime[]" value="zoo"> Zoo
                </label>

           </div>

        </div>

       <button class="btn btn-lg btn-primary btn-block" id = "listing" type="submit">Add To My Interests</button> </form>

             <hr class="featurette-divider">



                  

         </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="bower_components/bootstrap-jasny/dist/js/bootstrap.min.js"></script>
            <script src="bower_components/bootstrap-jasny/dist/js/docs.min.js"></script>
          </body>
        </html>