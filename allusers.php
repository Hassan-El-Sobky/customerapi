<?php


$conn=mysqli_connect("localhost",'root','','market');


$query="SELECT * FROM CUSTOMERS ";

$result=mysqli_query($conn,$query);

$allCustomers=mysqli_fetch_all($result,MYSQLI_ASSOC);
$jsonCustomer=json_encode($allCustomers);
print_r($jsonCustomer);

?>