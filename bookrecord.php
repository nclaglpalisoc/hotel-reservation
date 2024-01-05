<?php 

session_start(); 

include "database.php"; 

if (!isset($_SESSION["user"])) { 

 header("Location: bookrecord.php"); 

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

 
 <style> 

 .square { 
 position: absolute; 

 width: 200px; 
 height: 200px; 
 background-color: white; 
 z-index: -1; 
 top: 50%; 
 left: 50%; 
 transform: translate(-50%, -50%); 
border-radius:20px; 
 } 

 

 .record { 

 z-index: 0; 
text-align: center;  
margin-top: 200px; 
} 
 </style> 

</head> 

<body class="bodyindex"> 

<section> 

<nav class="navbar navbar-expand-lg"> 

 <div class="container-fluid"> 

 <img class="logoo" src="img/logoo.png" alt=""> 

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> 

<span class="navbar-toggler-icon"></span> 

 </button> 
 <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
<div class="navbar-nav"> 

<a class="btn nav-link text-white" href="index.php">Home</a> 
 <a class="btn nav-link text-white" href="bookrecord.php">Book Record</a> 
<a class="btn nav-link text-white" href="#">Rooms</a> 
<a class="nav-link"><a href="logout.php" class="btn btn-dark text-white">Logout</a></a> 
</div> 
</div> 
</div> 

</nav> 

</section> 

<div> 
<section> 
 <div class="square"></div> 
 </section> 
 <section class="record text-dark"> 
<?php 

 echo "Name: " .$_POST["name"]. "</br>", 

"Email: " .$_POST["email"]. "</br>", 

"Contact No: " .$_POST["phone"]. "</br>", 

"Check-in: " .$_POST["checkin"]. "</br>", 

"Check-out: " .$_POST["checkout"]. "</br>", 

"Room_preference: " .$_POST["room_preference"]; 

 ?> 
 </section> 
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
 integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> 
crossorigin="anonymous"></script>
</body> 
</html> 
<?php 