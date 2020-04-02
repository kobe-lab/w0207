<?php
include "mysql-basic.php";


$mycategory = [
    "Home Appliances",
    "Stationary",
    "Food and Beverages",
    "Clothes",
    "Furniture"
];

foreach($mycategory as $v){
mysqli_query($link, "INSERT INTO category (title, created_date) 
VALUES ('$v', NOW())") or die(mysqli_error($link));
}
?>