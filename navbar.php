	<?php
			$pdo = Database::connect();
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT id,name FROM category ORDER BY name";
	        $q = $pdo->prepare($sql);
	        $q->execute(array($id));
	        $data = $q->fetch(PDO::FETCH_ASSOC);
	        
	        Database::disconnect();
	 ?>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      			</button>
      			<!-- <a class="navbar-brand" href="#"><h5> Milwaukee Glassware </h5><img src="MKE Glass" alt="" id="navlogo"></a> -->
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
      			<ul class="nav navbar-nav">
       			<li><a href="index.php">Home</a></li>
        		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
        				<ul class="dropdown-menu">
        					<select name='data'>
        					<?php foreach ($data as $row){?><option value="<?php echo $row['id'];?>"<?php if($row['id'] == $data) { ?> selected="selected"<?php } ?> ><?php echo $row['name'];?></option><?php }?>
        					</select>
        				</ul>
        		<li><a href="cart.php">Cart</a></li>
        		<li><a href="search.php">Search</a></li>
            	<li><a href=""></a></li>
      			</ul>
    			<ul class="nav navbar-nav navbar-right">
        		<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>


