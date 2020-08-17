<?php
    session_start();
	
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
	<div id="heading">
      <div id="top">

        <div class="container">
          <div class="col-md-3 offer">
            <a href="#" class="btn btn-success btn-sm">Welcome</a>
            <a href="#">4 items in your cart</a>
            <a href="pratibha.php">Shopping cart items in cart  Total Price:75  </a>
			
          </div>
		  
		 </div>
		  
		  
		  
		  
		  
		
			
			<nav class="navbar navbar-expand-sm">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">CSI CANTEEN</a>
			</div>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a  class="nav-link" href="#">	LOG IN</a>
    </li>
    <li class="nav-item">
      <a  class="nav-link" href="#">MY ACCOUNT</a>
    </li>
    <li class="nav-item">
      <a  class="nav-link" href="cart1.php">GO TO CART</a>
    </li>
  </ul>

</nav>
		  
		  
		  
			</div>
			</div>
			<div id="bgg">
			<div  class="collapse clearfix" id="search">
			<form method="get" action="results.php" class="navbar-form">
			     <div class="input-group">
				    <input type ="text" class="form-control" placeholder="Search" name="user_query" required>
					<button type="submit" name="search" class="btn btn-primary">
						<i class="fa fa-search"></i>
					
					
					</button>
				 </div>
			</form>
			
			</div>
			
	</div>
	</div>
	  
				
		<div class ="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<h3 class="panel-title"> Products Categories</h3>
	</div>
	
			
		

	<form method="post" action="cart1.php?action=add&id=<?php echo $row["id"]; ?>">
	<div class="row">
			<div class="col-sm-3 ">
				<img src="images2/bajji.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
			<div class="col-sm-3 ">
				<img src="images2/bonda.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
				<div class="col-sm-3 ">
				<img src="images2/chapati.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>




						
				
	 <div class="col-sm-3 ">
	<img src="images2/chillibajji.jpg" class="container-fluid"> 
	<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
	<div class="row">
	<div class="col-sm-3 text-success">8rs</div>
	</div>
	</div>
	</div>
	
						
						
						
		<div class="row">
			<div class="col-sm-3 ">
				<img src="images2/curdrice.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
			<div class="col-sm-3 ">
				<img src="images2/dosa.jpg" class="container-fluid"> 
				<<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
				<div class="col-sm-3 ">
				<img src="images2/idli.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						
						<div class="row">	
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>		
				
				 <div class="col-sm-3 ">
				<img src="images2/medhuvada.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
				
	</div>
	
	<div class="row">
			<div class="col-sm-3 ">
				<img src="images2/lemonrice.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
			<div class="col-sm-3 ">
				<img src="images2/paratha.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
				<div class="col-sm-3 ">
				<img src="images2/omlet.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>		
				
				 <div class="col-sm-3 ">
				<img src="images2/poori.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
				
	</div>
	<div class="row">
			<div class="col-sm-3 ">
				<img src="images2/parupuvada.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
			<div class="col-sm-3 ">
				<img src="images2/samosa.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
				<div class="col-sm-3 ">
				<img src="images2/lollypop.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>		
				
				 <div class="col-sm-3 ">
				<img src="images2/eclairs.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
				
	</div>
	
	<div class="row">
			<div class="col-sm-3 ">
				<img src="images2/dairymilk.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
			<div class="col-sm-3 ">
				<img src="images2/drinks.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>
				<div class="col-sm-3 ">
				<img src="images2/lays.jpg" class="container-fluid"> 
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger"
				value="Add to Cart">
						<div class="row">
						
							
							<div class="col-sm-3 text-success">8rs</div>
					
						</div>
						
						</div>		
				
				 
				
	</div>
	
	</form>
	</div>
	
	
				
		
      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <script src="bower_components/tether/dist/tether.min.js"></script>
      <script src="bower_components/bootstrap/dist/bootstrap.min.js"></script>

    </body>
    </html>