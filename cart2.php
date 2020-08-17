<?php 
session_start();
$connect = mysqli_connect("localhost:3307", "root", "", "cart1");
/*  This creates a object called $connect that has the connection parameters host, port, username, password, dbname and socket.

The host (localhost) parameter defines either host name or an IP address. The username (root) defines the MySQL user name that
 you can check on phpmyadmin 
while password (empty in your case) is related to authentication. At last, dbname (test) is the name of the database you want to work in. */
if(isset($_POST["add_to_cart"]))/*if add to cart or shopping cart is clicked go here*/
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");/*whose function is to store in a variable called $item_array_id one column from the input array $_SESSION["shopping_cart"]*/
		if(!in_array($_GET["id"], $item_array_id))/*used to check whether value dosent exists in the array*/
		{
			$count = count($_SESSION["shopping_cart"]);/*new array item_array is stored here*/
			$item_array = array(
				'item_id'			=>	$_GET["id"],            /* we are going to get all these variables in item_array */
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}/*  for the session having key value pairs get the id and unset all the keys index in shopping cart
and dispaly an alert saying item removed window.location represents the current url of the window*/

?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width-device-width,initial-scale=1">
    <title>CSI canteen</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
	  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/tether.min.css"/>
	<link rel="stylesheet" href="pratibha21.css"/>
  </head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center">CSI CANTEEN</h3><br />
			<br /><br />
			<?php
				$query = "SELECT * FROM products ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)/*fetch from sql database and display data*/
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			
			<div class="col-md-8">
				<form method="post" action="cart2.php?action=add&id=<?php echo $row["id"]; ?>">     /*submit to the same page without refreshing*/	
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images2/<?php echo $row["image"]; ?>" class="img-responsive" />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="cart2.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
      <script src="bower_components/tether/dist/tether.min.js"></script>
      <script src="bower_components/bootstrap/dist/bootstrap.min.js"></script
	
	
	
	</body>
</html>