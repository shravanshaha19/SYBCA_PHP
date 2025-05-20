<?php
$name=$_POST['name'];
$address=$_POST['address'];
$contactNo=$_POST['contactNo'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$dateOfJourney=$_POST['dateOfJourney'];
$gender=$_POST['gender'];
$noOfPerson=$_POST['noOfPerson'];
$priceOfTicket=$_POST['priceOfTicket'];
$totatCost=$noOfPerson*$priceOfTicket;

echo"<center>";
echo"<h1>Air Ticket Reservation Details</h1>";
echo"Name:$name<br>";
echo"Address:$address<br>";
echo"Contact No:$contactNo<br>";
echo"Source:$source<br>";
echo"Destination:$destination<br>";
echo"Date of Joureny:$dateOfJourney<br>";
echo"Gender:$gender<br>";
echo"No of Person:$noOfPerson<br>";
echo"Price of Ticket:$priceOfTicket<br>";
echo"Total Cost:$totatCost<br>";
echo"</center>";
?>