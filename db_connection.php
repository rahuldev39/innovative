<?php
 $dbhost = "localhost";
 $dbuser = "ninegrap_ivcontactus";
 $dbpass = "contactus@123";
 $db = "ninegrap_ivcontactus";
 $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$db");
  // Check connection
 if (!$conn) {
     die('Could not connect: ' . mysqli_connect_error());
}

?>