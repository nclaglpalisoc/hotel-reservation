<?php 

session_start(); 

include "database.php"; 

if (!isset($_SESSION["user"])) { 

 header("Location: book.php"); 

} 

?> 

<!DOCTYPE html> 

<html lang="en"> 

<head> 

 <meta charset="UTF-8"> 

<link rel="shortcut icon" type="x-icon" href="img/logoo.png"> 

<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 

 <link rel="stylesheet" href="style.css"> 

 <title>Mythical Longue Hotel</title> 

</head> 

<body class="bodyindex"> 

<section> 

<nav class="navbar navbar-expand-lg"> 

 <div class="container-fluid"> 

 <a class="logoo text-center" href="index.php"><img src="img/logoo.png" alt=""></a> 

 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> 

 <span class="navbar-toggler-icon"></span> 

 </button> 
 </div> 

 </div> 

</nav> 

</section> 

<hr class="text-light mx-100"> 

<section class="bodybook"> 

<form action="bookrecord.php" method="post"> 

<h5 class="text-light">Name:</h5> 

<div class="form-group"> 

<input type="text" placeholder="Enter Name:" name="name" class="form-control"> 
 </div> 

 <h5 class="text-light">Email:</h5> 

<div class="form-group"> 

 <input type="email" placeholder="Enter Email:" name="email" class="form-control"> 

 </div> 

 <h5 class="text-light">Contact Number:</h5> 
 <div class="form-group"> 

 <input type="phone" placeholder="Contact No. :" name="phone" class="form-control"> 

 </div> 

 <h5 class="text-light">Check-in:</h5> 

 <div class="form-group"> 

 <input type="date" placeholder="Check-in :" name="checkin" class="form-control"> 

 </div> 

 <h5 class="text-light">Check-out:</h5> 

 <div class="form-group"> 

 <input type="date" placeholder="Check-out :" name="checkout" class="form-control"> 

 </div> 

 <div class="form-group text-light"> 

 <label for="room-selection">Select Room Preference</label> 

 <select id="room-selection" name="room_preference" required> 

 <option value="">Choose your class:</option> 

<option value="class1">Class 1</option> 

 <option value="class2">Class 2</option> 

 <option value="class3">Class 3</option> 

 </select> 

 </div> 

 <div class="form-btn text-center"> 

 <input type="submit" value="Book Now!" name="book" class="btn btn-primary mb-5"> 

 </div> 

</form> 

 </section> 

</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> 

</body> 

</html> 

<?php 