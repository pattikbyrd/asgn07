<!DOCTYPE html>
<!--	Author: Patti Byrd
		Date:	March 2nd, 2019 
		File:	software-order.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Software Order</h1>
<?php

	// your code here

  include('inc-order-object.php');
  
  $order = new Order();
  
  $cost = $_POST['cost'];
  $items = $_POST['items']
    
  $cost->setItemCost();
  $items->setNumItems();

  $subTotal->getSubTotal();
  $tax->getSalesTax();
  $shippingHandling->getShippingHandling();
  $total->getTotal();
  
	
	print("	<table>
			<tr><td>Sub-Total:</td><td>$subTotal</td></tr>
			<tr><td>Tax:</td><td>$tax</td></tr>
			<tr><td>Shipping and Handling:</td><td>$shippingHandling</td></tr>
			<tr><td>TOTAL:</td><td>$total</td></tr>
			</table>");
?>
</body>
</html>